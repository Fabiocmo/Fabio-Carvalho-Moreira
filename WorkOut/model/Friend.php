<?php

class Friend
{
	private $name;
	private $friend_name;
	
	public function __construct($name, $friend_name)
	{
		$this->name = $name;
		$this->friend_name = $friend_name;
	}

}