<?php
include "connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM cars WHERE id='$id' ";
    $delete = mysqli_query($con,$sql);
    if($delete){
        echo "data deleted successfuly";
        header("location:car_details.php");
    }else{
        echo "error occured about deleting data";
    }
}
?>