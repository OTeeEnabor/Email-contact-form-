<?php
require('base.php');

//create a conncetion
$conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

//check if the connection was successful
//if this condition($conn->connect_error) --> 
if($conn->connect_error){
    //then die means the code will terminate with an error code.
    die("Connection Failed: ". $conn->connect_error);
}

?>