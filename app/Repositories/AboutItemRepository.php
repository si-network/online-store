<?php

namespace App\Repositories;

use Core\Interfaces\Storage\Query;
use App\Models\AboutItem;

class AboutItemRepository
{
	protected $db;

	protected $items = [];

	function __construct(Query $db)
	{
		$this->db = $db;
	}

	public function getAll()
	{
		if (!empty($this->items)) 
			return $this->items;
		
		$query = $this->db->all('about_items')->run(\PDO::FETCH_ASSOC);
		$this->items = $this->rowsToObjects($query);
		return $this->items;
	}

	protected function rowsToObjects($rows)
	{
		$objects = [];
		foreach ($rows as $row => $col) {
			$objects[$col['id']] = new AboutItem(
				$col['id'],
				$col['title'],
				$col['description'],
				$col['image_path'],
				$col['icon_name']
			);
		}
		return $objects;
	}
}