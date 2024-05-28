<?php

include_once("../config/config.php");

class Database
{

    protected $host = HOST;
    protected $user = USER;
    protected $pass = PASS;
    protected $dbname = DBNAME;

    public function connect(){
        $connection = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
        if(mysqli_connect_errno())
        {
            printf("Database connection error: %s", mysqli_connect_errno());
            exit();
        }
        return $connection;
    }

}


?>