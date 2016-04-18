<?php
class User
{    
    
    private $userName;
    private $lastName;
    private $birthDate;
    private $biographi;
    private $email;
    private $login;
    private $password;

    public function __construct($userName, $lastName, $birthDate, $biographi, $email, $login, $password)
    {
        $this->setUserName($userName);
        $this->setLastName($lastName);
        $this->setBirthDate($birthDate);
        $this->setBiographi($biographi);
        $this->setEmail($email);
        $this->setLogin($login);
        $this->setPassword($password);
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function setBirthDate($birthDate)
    {
        $this->bithDate = $birthDate;
    }
    public function setBiographi($biographi)
    {
        $this->biographi = $biographi;
    }
     public function setEmail($email)
    {
        $this->email = $email;
    }
     public function setLogin($login)
    {
        $this->login = $login;
    }
     public function setPassword($password)
    {
        $this->password = $password;
    }



    public function getUserName()
    {
        return $this->userName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    public function getBiographi()
    {
        return $this->biographi;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function getPassword()
    {
        return $this->password;
    }
}