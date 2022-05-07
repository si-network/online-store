<?php

namespace App\Services;

use App\Repositories\AboutItemRepository;
use Core\Interfaces\Storage\Query;

class About
{
	protected $aboutItemRepository;

	function __construct(AboutItemRepository $aboutItemRepository, Query $db)
	{
		$this->aboutItemRepository = $aboutItemRepository;
		$this->db = $db;
	}

	public function getItems()
	{
		return $this->aboutItemRepository->getAll();
	}

	public function getContent()
	{	
		$query = $this->db->all('page_about')->run(\PDO::FETCH_NUM);
		$content = [];
		foreach ($query as $row => $item) {
			$content[$item[0]] = $item[1];
		}
		return $content;
	}
}