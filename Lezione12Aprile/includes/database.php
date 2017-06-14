<?php

include 'includes/config.php';

class Database
{
    private $host = DB_HOST;
    private $user = DB_USERS;
    private $password = DB_PASS;
    private $dbname = DB_NAME;
    
    private $link;
    
    function __construct() 
    {
        $this->connetti();
    }

    public function connetti() 
    {
       $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);    
    }
    
    public function select($query) 
    {
      $result = mysqli_query($this->link, $query);
      if($result->num_rows > 0)
          return $result;
      else
          return false;
    }
    

}


?>
