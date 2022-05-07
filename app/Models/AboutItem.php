<?php

namespace App\Models;

class AboutItem extends Model
{
	protected $id;
	protected $title;
	protected $description;
	protected $imagePath;
	protected $iconName;

	function __construct($id, $title, $description, $imagePath, $iconName)
	{
		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->imagePath = $imagePath;
		$this->iconName = $iconName;
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

	public function getIconName()
	{
		return $this->iconName;
	}

	public function setIconName($iconName)
	{
		$this->iconName = $iconName;
	}
}