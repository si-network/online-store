<?php

namespace App\Services;

/**
 * Operations with filters included in the URI
 */
class Filters
{
	public function prepareFiltersForDatabaseQueryWhere(string $filters) : array
	{
		$items = explode('/', urldecode($filters));
		$prepareFilers = [];
		foreach ($items as $key => $value) {
			$splitFilter = explode('=', $value);
			$prepareFilers[] = $splitFilter[0].'='.'"'.$splitFilter[1].'"';
		}
		return $prepareFilers;
	}
}