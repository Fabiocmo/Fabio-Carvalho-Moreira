<?php
class searchUser
{    
    
    private $userName;
    private $lastName;
   
    public function __construct($userName, $lastName)
    {
        $this->setUserName($userName);
        $this->setLastName($lastName);
        
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    public function setLastName($LastName)
    {
        $this->lastName = $lastName;
    }
    

    public function getUserName()
    {
        return $this->userName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
}