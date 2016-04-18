<?php
class Publication
{    
    
    private $userName;
    
    public function __construct($userName)
    {
        $this->setUserName($userName);
        
    }
    public function setUserName($userName)
    {
        $this->name = $userName;
    }
    
    public function getUserName()
    {
        return $this->userName;
    }
    
}