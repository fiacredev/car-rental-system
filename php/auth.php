<?php 

// deal with creating sessions
session_start();
if(!isset($_SESSION['username'])){
   header("location:login.php");
   exit();
}

?>