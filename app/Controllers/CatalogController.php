<?php

namespace App\Controllers;

use Core\Routing\Controller;
use App\Services\Catalog;
use App\Services\Product;
use Core\Facades\View;

class CatalogController extends Controller
{
	protected $catalogService;

	protected $productService;

	function __construct(Catalog $catalogService, Product $productService)
	{
		$this->catalogService = $catalogService;
		$this->productService = $productService;
	}

	public function index()
	{
		View::show('catalog.twig')->with(['categories' => $this->catalogService->getCategories()]);
	}

	public function showCatalogByCategoryName($categoryName, $filters = null)
	{
		if ($this->catalogService->existsCategory($categoryName)) {
			View::show('catalog_category.twig')->with([
				'category'		=> $this->catalogService->getCategoryByName($categoryName),
				'childs'		=> $this->catalogService->getChildCategoriesByParentName($categoryName),
				'categories' 	=> $this->catalogService->getCategories(),
				'filters' 		=> $this->catalogService->getFilters($categoryName, $filters),
				'products'		=> $this->productService->getProductsByCategoryName($categoryName, $filters)
			]);
		}
	}
}