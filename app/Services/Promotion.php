<?php

namespace App\Services;

use App\Repositories\PromotionRepository;

class Promotion
{
    protected $promotionRepository;

    function __construct(PromotionRepository $promotionRepository)
    {
        $this->promotionRepository = $promotionRepository;
    }

    public function getPromotions()
    {
        return $this->promotionRepository->getAll();
    }

    public function getPromotionById($id)
    {
        return $this->promotionRepository->getById($id);
    }
}