<?php

namespace App\Repositories;

use Core\Interfaces\Storage\Query;
use App\Models\CatalogCategory;

class CatalogCategoryRepository
{
	protected $db;

	protected $categories = [];

	function __construct(Query $db)
	{
		$this->db = $db;
	}

	public function getAll()
	{
		if (!empty($this->categories)) 
			return $this->categories;
		
		$query = $this->db->all('product_categories')->run(\PDO::FETCH_ASSOC);
		$this->categories = $this->rowsToObjects($query);
		return $this->categories;
	}

	protected function rowsToObjects($rows)
	{	
		$objects = [];
		foreach ($rows as $row => $col) {
			$objects[$col['name']] = new CatalogCategory(
				$col['id'],
				$col['name'],
				$col['title'],
				$col['layer'],
				$col['parent_id'],
				$col['image_path']
			);
		}
		return $objects;
	}
}