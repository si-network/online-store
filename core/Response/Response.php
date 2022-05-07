<?php

namespace Core\Response;

use Core\Interfaces\Response\Response as ResponseInterface;
use Core\Interfaces\View\View;

class Response implements ResponseInterface
{
    /**
     * View instance
     *
     * @var View
     */
	protected $view;

	protected $headers = [];

	protected $statusCode;

    /**
     * Response constructor.
     *
     * @param View $view
     */
	function __construct(View $view)
	{
		$this->view = $view;
	}

	public function render()
	{
		if ($this->view->hasTemplate()) {
			http_response_code(200);
			$this->renderHTML();
			return;
		}
		$this->render404();
	}

	protected function renderHTML()
	{
		echo $this->view->callView();
	}

	protected function renderJSON()
	{

	}

	protected function render404()
	{
		http_response_code(404);
		echo $this->view->show('404.twig')->callView();
	}
}