<?php
class ChartExercise
{    
    
    private $userName;
    private $nameFriend;
    private $expireDate; 
    private $exercises;
    
    public function __construct($userName, $nameFriend, $expireDate, $exercises)
    {
        $this->setUserName($userName);
        $this->setNameFriend($nameFriend);
        $this->setExpireDate($expireDate);
        $this->setExercises($exercises);
        
    }
    public function setUSerName($userName)
    {
        $this->userName = $userName;
    }
    public function setNameFriend($nameFriend)
    {
        $this->nameFriend = $nameFriend;
    }
    public function setexpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    }
    public function setExercises($exercises)
    {
        $this->exercises = $exercises;
    }
     



    public function getUserName()
    {
        return $this->userName;
    }
    public function getNameFriend()
    {
        return $this->nameFriend;
    }
    public function getExpireDate()
    {
        return $this->expireDate;
    }
    public function getExercises()
    {
        return $this->exercises;
    }
    
}