<?php

namespace Core\Interfaces\View;

interface View
{
	public function show($template);

	public function with($variable, $value);
	
    public function callView();
}