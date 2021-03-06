<?php

/**
 * This file is part of the University module for webcms2.
 * Copyright (c) @see LICENSE
 */

namespace WebCMS\UniversityModule\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as gedmo;

/**
 * @ORM\Entity()
 * @ORM\Table(name="university_Schedule")
 */
class Schedule extends \WebCMS\Entity\Entity
{
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $title;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $url;

	/**
	 * @ORM\Column(type="text")
	 */
	private $path;
	
	
	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getUrl() {
		return $this->url;
	}

	public function setUrl($url) {
		$this->url = $url;
	}

	public function getPath() {
		return $this->path;
	}

	public function setPath($path) {
		$this->path = $path;
	}
}