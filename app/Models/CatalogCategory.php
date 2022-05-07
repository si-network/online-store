<?php

namespace App\Models;

class CatalogCategory extends Model
{
	protected $id;
	protected $name;
	protected $title;
	protected $layer;
	protected $parentId;
	protected $imagePath;

	function __construct($id, $name, $title, $layer, $parentId, $imagePath)
	{
		$this->id = $id;
		$this->name = $name;
		$this->title = $title;
		$this->layer = $layer;
		$this->parentId = $parentId;
		$this->imagePath = $imagePath;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getLayer()
	{
		return $this->layer;
	}

	public function setLayer($layer)
	{
		$this->layer = $layer;
	}

	public function getParentId()
	{
		return $this->parentId;
	}

	public function setParentId($parentId)
	{
		$this->parentId = $parentId;
	}

	public function getImagePath()
	{
		return $this->imagePath;
	}

	public function setImagePath($imagePath)
	{
		$this->imagePath = $imagePath;
	}
}