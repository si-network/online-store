<?php

namespace App\Controllers;

use Core\Routing\Controller;
use App\Services\Promotion;
use Core\Facades\View;

class PromotionController extends Controller
{
	protected $promotionService;
	
	function __construct(Promotion $promotionService)
	{
		$this->promotionService = $promotionService;
	}

	public function index()
	{
		View::show('promotions.twig')->with(['promotions' => $this->promotionService->getPromotions()]);
	}

	public function showPromoById($id)
	{
		if ($promotion = $this->promotionService->getPromotionById($id)) 
			View::show('promotion.twig')->with(['promotion' => $promotion]);
	}
}