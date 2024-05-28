<?php

//database connection
include_once("../config/config.php");


$status = 0;
if(isset($_POST["username"])){

    $username = $_POST["username"];

    if(empty($username)){
        echo("username");
    }

}

?>