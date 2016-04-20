<?php

class User
{
	private $name;
	private $last_name;
	private $email;
	private $birthdate;
	private $phone;
	private $login;
	private $password;

	public function __construct($name, $last_name,
	$email, $birthdate, $phone, $login, $password)
	{
		$this->name = $name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->birthdate = $birthdate;
		$this->phone = $phone;
		$this->login = $login;
		$this->password = $password;
	}

}