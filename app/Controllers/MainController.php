<?php

namespace App\Controllers;

use Core\Routing\Controller;
use App\Services\Product;
use Core\Facades\View;

class MainController extends Controller
{
	protected $productService;

	function __construct(Product $productService)
	{
		$this->productService = $productService;
	}

	public function index()
	{
		View::show('main.twig')->with([
			'discountProducts' 	=> $this->productService->getDiscountProducts(),
			'popularProducts' 	=> $this->productService->getProducts(10, null, 'rating'),
			'newProducts' 		=> $this->productService->getProducts(2, null, 'id')
		]);
	}

	public function showMoreData($from)
	{
		View::show('catalog_products.twig')->with([
			'products' => $this->productService->getProducts(10, null, 'rating',$from)
		]);
	}
}