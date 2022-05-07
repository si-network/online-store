<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Services\Discount;

class Product
{
    protected $productRepository;
    protected $discount;

    function __construct(ProductRepository $productRepository, Discount $discount)
    {
        $this->productRepository = $productRepository;
        $this->discount = $discount;
    }

    public function getProductsByCategoryName($categoryName, $filters = null)
    {   
        return $this->productRepository->getByCategoryName($categoryName, $filters);
    }

    public function getDiscountProducts()
    {
        $discountProducts = $this->productRepository->getAll(null,'discount',null);
        foreach ($discountProducts as $product) {
            $product->setDiscountPrice($this->discount->makeDiscountPrice($product->getPrice(), $product->getDiscount(), '%'));
        }
        return $discountProducts;
    }

    public function getProducts($count = null, $filters = null, $sort = null, $from = null)
    {
        $products = $this->productRepository->getAll($count, $filters, $sort, $from);
        if ($products) {
            foreach ($products as $product) {
                if ($product->getDiscount()) {
                    $product->setPrice($this->discount->makeDiscountPrice($product->getPrice(), $product->getDiscount(), '%'));
                }
            }
            return $products;
        }
    }

    public function getProductSpecificationsByProductId($id)
    {

    }
}