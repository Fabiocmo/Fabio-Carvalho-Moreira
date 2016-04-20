<?php

class SearchUser
{
	private $name;
	private $last_name;
	private $email;
	
	public function __construct($name, $last_name, $email)
	{
		$this->name = $name;
		$this->last_name = $last_name;
		$this->email = $email;
	}

}