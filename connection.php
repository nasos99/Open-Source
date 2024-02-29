<?php
 //This function connects to the database
  function db_connect(){
    $servername="localhost";
    $username="ossie";
    $password="ossie";
    $dbname="college";
    return new mysqli($servername,$username,$password,$dbname);
  }


$conn = db_connect();

//Check connection to the database 
if(!$conn){echo "Error: Cannot find database"; die;}


?>
