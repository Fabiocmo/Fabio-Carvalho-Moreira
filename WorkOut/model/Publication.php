<?php

class Publication
{
	private $publication;
		
	public function __construct($publication)
	{
     	$this->publication = $publication;
	}

	public function getPublication()
	{
		return $this->publication;
	}

}