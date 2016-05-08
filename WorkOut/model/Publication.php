<?php

class Publication
{
	
	private $id_user;
	private $datee;
	private $hour;
	private $publication;
		
	public function __construct($id_user, $datee, $hour, $publication)
	{
     	
     	$this->id_user = $id_user;
     	$this->datee = $datee;
     	$this->hour = $hour;
     	$this->publication = $publication;

	}

	public function getIdUser()
	{
		return $this->id_user;
	}
	public function getDate()
	{
		return $this->datee;
	}		
	public function getHour()
	{
		return $this->hour;
	}
	public function getPublication()
	{
		return $this->publication;
	}


}