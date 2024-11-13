<?php 
include "connection.php";

if(isset($_POST['submit'])){
    
    $id = $_POST['id'];
    $names = $_POST['customer'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $id_card = $_POST['id_card'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];

    $sql = "UPDATE customers 
    SET full_name='$names',address='$address',contact='$phone',id_card='$id_card',gender='$gender',status='$status' WHERE id='$id'";
    
    $update = mysqli_query($con,$sql);
    if($update){
        echo "data updated successfully";
    }else{
        echo "error occured about updating data in database";
    }
}

?>