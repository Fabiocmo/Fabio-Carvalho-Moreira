<?php

class Publication
{
	private $name;
	private $id_publication;
	private $date_hour;
	
	public function __construct($name, $id_publication, date_hour)
	{
		$this->name = $name;
		$this->id_publication = $id_publication;
		$this->date_hour = $date_hour;
	}

}