<?php

namespace Core\Interfaces\Config;

interface Config
{
	public function get(string $value);

	public function __invoke(string $value);
}