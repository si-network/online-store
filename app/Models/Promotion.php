<?php

namespace App\Models;

class Promotion extends Model
{
	protected $id;
	protected $title;
	protected $titleAddition;
	protected $description;
	protected $imagePath;
	protected $dateFrom;
	protected $dateTo;

	function __construct($id, $title, $titleAddition, $description, $imagePath, $dateFrom, $dateTo)
	{
		$this->id = $id;
		$this->title = $title;
		$this->titleAddition = $titleAddition;
		$this->description = $description;
		$this->imagePath = $imagePath;
		$this->dateFrom = $dateFrom;
		$this->dateTo = $dateTo;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitleAddition()
	{
		return $this->titleAddition;
	}

	public function setTitleAddition($titleAddition)
	{
		$this->titleAddition = $titleAddition;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function getImagePath()
	{
		return $this->imagePath;
	}

	public function setImagePath($imagePath)
	{
		$this->imagePath = $imagePath;
	}

	public function getDateFrom()
	{
		return $this->dateFrom;
	}

	public function setDateFrom($dateFrom)
	{
		$this->dateFrom = $dateFrom;
	}

	public function getDateTo()
	{
		return $this->dateTo;
	}

	public function setDateTo($dateTo)
	{
		$this->dateTo = $dateTo;
	}
}