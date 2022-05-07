<?php

namespace App\Repositories;

use Core\Interfaces\Storage\Query;
use App\Models\Promotion;

class PromotionRepository
{
	protected $db;

	protected $promotions = [];

	function __construct(Query $db)
	{
		$this->db = $db;
	}

	public function getAll()
	{
		if (!empty($this->promotions)) 
			return $this->promotions;
		
		$query = $this->db->all('promotions')->run(\PDO::FETCH_ASSOC);
		$this->promotions = $this->rowsToObjects($query);
		return $this->promotions;
	}

	public function getById($id)
	{
		if (array_key_exists($id, $this->promotions))
		    return $this->promotions[$id];

		$query =  $this->db->getById('promotions', $id)->run(\PDO::FETCH_ASSOC);
		if ($query) {
			$promotion = $this->rowsToObjects($query);
		return $promotion[$id];
		}

	}

	protected function rowsToObjects($rows)
	{	
		$objects = [];
		foreach ($rows as $row => $col) {
			$objects[$col['id']] = new Promotion(
				$col['id'],
				$col['title'],
				$col['title_addition'],
				$col['description'],
				$col['image_path'],
				$col['date_from'],
				$col['date_to']
			);
		}
		return $objects;
	}
}