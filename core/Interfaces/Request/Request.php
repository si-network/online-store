<?php

namespace Core\Interfaces\Request;

interface Request
{
	public function __get($name);

    public function hasMethod();
}