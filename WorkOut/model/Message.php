<?php
class Message
{    
    
    private $userName;
    private $friendName;
   
    public function __construct($userName, $friendName)
    {
        $this->setUserName($userName);
        $this->setFriendName($friendName);
        
    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    public function setFriendName($friendName)
    {
        $this->friendName = $friendName;
    }
    

    public function getUserName()
    {
        return $this->userName;
    }
    public function getFriendName()
    {
        return $this->friendName;
    }
    
}