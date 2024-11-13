<?php 

include "connection.php";

if(isset($_GET['id'])){

$id = $_GET['id'];

//  deal with handling completed transactions
$sql_two = "SELECT * FROM rentals WHERE id='$id'";
$fetch = mysqli_query($con,$sql_two);
$data = mysqli_fetch_array($fetch);

$transaction_date = $data['transaction_date'];
$customer = $data['customer'];
$date_of_rent = $data['date_of_rent'];
$date_of_return = $data['date_of_return'];
$price = $data['price'];
$fine_per_day = $data['fine_per_day'];
$penalty = $data['penalty'];
$status = "Expired";

$sql_three = "INSERT INTO complete_transactions(transaction_date,customer,date_of_rent,date_of_return,price,fine_per_day,penalty,status)
VALUES('$transaction_date','$customer','$date_of_rent','$date_of_return','$price','$fine_per_day','$penalty','$status')";

$completed_transactions = mysqli_query($con,$sql_three);

 if($completed_transactions){
    echo "data retrieved successfully successfully";
    header("location:transaction_data.php");
 }else{
    echo "error occured about deleting data in database";
 }

 $sql = "DELETE FROM rentals WHERE id='$id' ";
 $delete = mysqli_query($con,$sql);

}

?>