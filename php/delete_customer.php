<?php

include "connection.php";

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "DELETE FROM customers WHERE id='$id'";
  $delete = mysqli_query($con,$sql);

  if($delete){
    echo "data delete successffuly";
    header("location:customer_details.php");
  }else{
    echo "error occured about deleting data";
  }
}

?>