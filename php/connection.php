<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "crentals";

$con = mysqli_connect($server,$user,$password,$database);

if($con){
    // echo "connection to database made successfuly";
}else{
    echo "error occured about having connection to database";
}

?>