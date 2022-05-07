<?php

namespace App\Repositories;

use Core\Interfaces\Storage\Query;
use App\Models\Product;
use App\Services\Filters;

class ProductRepository
{
	protected $db;

	protected $products = [];
	protected $filtersService;

	function __construct(Query $db, Filters $filtersService)
	{
		$this->db = $db;
		$this->filtersService = $filtersService;
	}

	public function getByCategoryName($categoryName, $filters = null)
	{
		$query = $this->db
			->select('products.*, products_discount.discount, COUNT(product_comments.comment) AS count_comments, AVG(product_comments.rating) AS rating')
			->from('products')
			->join('product_category_' . $categoryName)
			->on('products.id = product_category_' . $categoryName.'.product_id')
			->join('products_discount', 'LEFT')
			->on('products.id = products_discount.product_id')
			->join('product_comments', 'LEFT')
			->on('products.id = product_comments.product_id')
			->where((!is_null($filters)) ?  implode(' AND ', $this->filtersService->prepareFiltersForDatabaseQueryWhere($filters)) : '1')
			->groupBy('id')
			->run(\PDO::FETCH_ASSOC);
		$products = $this->rowsToObjects($query);		
		return $products;
	}

	public function getAll($count = null, $filters = null, $sortKey = null, $from = null)
	{
		$query = $this->db
			->select('products.*, products_discount.discount, COUNT(product_comments.comment) AS count_comments, AVG(product_comments.rating) AS rating')
			->from('products')
			->join('products_discount', 'LEFT')
			->on('products.id = products_discount.product_id')
			->join('product_comments', 'LEFT')
			->on('products.id = product_comments.product_id');

		if (!is_null($filters)) {
			$query->where($filters);
		}

		$query->groupBy('id');

		if (!is_null($sortKey)) {
			$query->orderBy($sortKey);
		}

		if (!is_null($count)) {
			$query->limit($count, $from);
		}

		$query = $query->run(\PDO::FETCH_ASSOC);
		$products = $this->rowsToObjects($query);
		return $products;
	}

	protected function rowsToObjects($rows)
	{	
		$objects = [];
		foreach ($rows as $row => $col) {
			$objects[$col['id']] = new Product(
				$col['id'],
				$col['title'],
				$col['description'],
				$col['price'],
				$col['brand'],
				$col['category_id'],
				$col['quantity'],
				$col['discount'],
				$col['count_comments'],
				$col['rating']
			);
		}
		return $objects;
	}
}