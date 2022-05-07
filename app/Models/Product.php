<?php

namespace App\Models;

class Product extends Model
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $brand;
    protected $category;
    protected $quantity;
    protected $discount;
    protected $countComments;
    protected $rating;
    protected $features;
    protected $discountPrice;

    function __construct($id, $title, $description, $price, $brand, $category, $quantity, $discount, $countComments, $rating, $features = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->brand = $brand;
        $this->category = $category;
        $this->quantity = $quantity;
        $this->discount = $discount;
        $this->countComments = $countComments;
        $this->rating = $rating;
        $this->features = $features;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getCountComments()
    {
        return $this->countComments;
    }

    public function setCountComments($countComments)
    {
        $this->countComments = $countComments;
    }

    public function getRating()
    {
        return round($this->rating, 1);
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getFeatures()
    {
        return $this->features;
    }

    public function setFeatures(array $features)
    {
        $this->features = $features;
    }

    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice = $discountPrice;
    }
}