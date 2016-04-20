<?php
 
 class DBConnector
 {
     private $ip;
     private $db_name;
     private $type;
     private $port;
     private $user;
     private $password;
 
     public function __construct($ip, $db_name, $type, $port, $user, $password)
     {
         $this->setdb_name($db_name);
         $this->setip($ip);
         $this->setport($port);
         $this->settype($type);
         $this->setuser($user);
        $this->setpassword($password);
     }
     public function connect(){
         $db = new PDO('mysql:host='.$this->getip().';port='.$this.$this->getport().';db_name='.$this->getdb_name(),
             $this->getuser(),
             $this->getpassword());
         return $db;
     }
     public function closeConnection($connection){
         $connection = null;
     }
 
     public function getdb_name()
    {
         return $this->db_name;
     }
 
     public function getpassword()
     {
         return $this->password;
     }
 
     public function getport()
     {
         return $this->port;
     }
 
     public function gettype()
     {
         return $this->type;
     }
 
     public function getuser()
     {
         return $this->user;
     }
 
     public function getip()
     {
         return $this->ip;
     }
 
     public function setdb_name($db_name)
     {
         $this->db_name = $db_name;
    }
 
   public function setpassword($password)
     {
         $this->password = $password;
     }
 
     public function setport($port)
     {
         $this->port = $port;
     }
 
     public function settype($type)
     {
         $this->type = $type;
     }
 
     public function setuser($user)
     {
         $this->user = $user;
     }
 
     public function setip($ip)
     {
         $this->ip = $ip;
     }
 
 } 