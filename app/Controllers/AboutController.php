<?php

namespace App\Controllers;

use Core\Routing\Controller;
use App\Services\About;
use Core\Facades\View;

class AboutController extends Controller
{
	protected $aboutService;

	function __construct(About $aboutService)
	{
		$this->aboutService = $aboutService;
	}

	public function index()
	{	
		View::show('about.twig')->with([
			'items' => $this->aboutService->getItems(),
			'content' => $this->aboutService->getContent()]
		);
	}
}