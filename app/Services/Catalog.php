<?php

namespace App\Services;

use App\Repositories\CatalogCategoryRepository;
use Core\Interfaces\Storage\Query;

class Catalog
{
	protected $categoryRepository;
	protected $db;
	protected $filtersService;

	function __construct(CatalogCategoryRepository $categoryRepository, Query $query, Filters $filtersService)
	{
		$this->categoryRepository = $categoryRepository;
		$this->db = $query;
		$this->filtersService = $filtersService;
	}

	public function getCategories()
	{
        return $this->categoryRepository->getAll();
	}

	public function getCategoryByName($categoryName)
	{
		return $this->categoryRepository->getAll()[$categoryName];
	}

	public function getChildCategoriesByParentName($categoryName)
	{
		$categories = $this->categoryRepository->getAll();
		$parentId = $this->categoryRepository->getAll()[$categoryName] ? $this->categoryRepository->getAll()[$categoryName]->getId() : '';
		$childs = [];

		foreach ($categories as $key => $category) {
			if ($category->getParentId() == $parentId) {
				$childs[] = $category;
			}
		}
		return $childs;
	}

	public function getFilters($categoryName, $filters)
	{
		$productFeaturesByCategory = $this->db
			->select('feature_name')
			->from('product_features')
			->join('product_categories')
			->on('product_features.category_id = product_categories.id AND product_categories.name = "'.$categoryName.'"')
			->run(\PDO::FETCH_NUM);

		if ($productFeaturesByCategory) {

			$listCategoryFeatures = [];
			array_walk_recursive($productFeaturesByCategory, function ($value, $key) use (&$listCategoryFeatures) {
	    		$listCategoryFeatures[] = $value;    
			});
			
			$countFeatures = count($listCategoryFeatures);
			$queryToGetFeaturesInfo = $queryToGetProductsCount = '';
			
			foreach ($listCategoryFeatures as $key => $value) {
				$queryToGetFeaturesInfo .= 'SELECT "'.$value.'" AS col_name, '.$value.' AS col_value FROM product_category_' . $categoryName . ' GROUP BY col_value' . 
				((++$key < $countFeatures) ? ' UNION ' : '');

				$queryToGetProductsCount .= 'SELECT "'.$value.'" AS col_name, '.$value.' AS col_val, COUNT(*) AS count_value FROM product_category_' . $categoryName .  
				((!is_null($filters)) ? ' WHERE ' . implode(' AND ', $this->filtersService->prepareFiltersForDatabaseQueryWhere($filters)) : '') .' GROUP BY col_val' . 
				(($key < $countFeatures) ? ' UNION ' : '');
			}

			$queryToGetFilters = $this->db
				->select('feature_name, title, col_value, count_value, unit, data_type')
				->from('product_features AS features')
				->join('('.$queryToGetFeaturesInfo.') AS features')
				->join('('.$queryToGetProductsCount.') AS count','LEFT')
				->on('features.col_value = count.col_val AND features.col_name = count.col_name')
				->join('(SELECT id FROM product_categories WHERE name = "' . $categoryName . '") AS category_id')
				->on('features.feature_name = features.col_name AND features.category_id =  category_id.id')
				->orderBy('feature_name, col_value', 'ASC')
				->run(\PDO::FETCH_ASSOC);

			$filters = [];
			$intTypesFilters = [];
			foreach ($queryToGetFilters as $filterKey => $filterValue) {
				//если значение фильтра товара пусто, то удалить его
				if (empty($filterValue['col_value'])) {
					unset($filterValue);
					continue;
				}
				// заменить null на 0
				is_null($filterValue['count_value']) ? $filterValue['count_value'] = 0 : '';

				if ($filterValue['data_type'] == 'int') {
					$intTypesFilters[$filterValue['feature_name']][$filterValue['col_value']] = $filterValue;
					continue;
				}
				$filters[$filterValue['feature_name']][] = $filterValue;	
			}

			foreach ($intTypesFilters as $key => &$value) {
				sort($value);
				$filters[$key] = $value;
			}
						
			// если у свойства только одно значение, то убрать его из массива
			foreach ($filters as $key => $value) {
				if (count($value) <= 1) 
					unset($filters[$key]);
			}
			return $filters;
		}
	}

	public function existsCategory($categoryName)
	{
		return $this->categoryRepository->getAll()[$categoryName] ? true : false;
	}
}