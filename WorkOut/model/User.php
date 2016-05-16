<?php

class User
{
	private $name;
	private $last_name;
	private $email;
	private $birthdate;
	private $phone;
	private $pass;

	public function __construct($name, $last_name,
	$email, $birthdate, $phone, $pass)
	{
		$this->name = $name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->birthdate = $birthdate;
		$this->phone = $phone;
		$this->pass = $pass;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getLastname()
	{
		return $this->last_name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getBirthdate()
	{
		return $this->birthdate;
	}

	public function getPhone()
	{
		return $this->phone;
	}
	
	public function getPassword()
	{
		return $this->pass;
	}

}