<?php 

include "connection.php";

if(isset($_POST['submit'])){

  $customer = $_POST['customer'];
  $car = $_POST['car'];
  $date_of_rent = $_POST['rentDate'];
  $date_of_return = $_POST['returnDate'];
  $price = $_POST['price'];
  $fine = $_POST['fine'];
  $penalty = $_POST['penalty'];

  $sql = "INSERT INTO rentals(customer,car,date_of_rent,date_of_return,price,fine_per_day,penalty)
  VALUES('$customer','$car','$date_of_rent','$date_of_return','$price','$fine','$penalty')";

  $insert = mysqli_query($con,$sql);
  
  if($insert){
    echo "data inserted successfully";
    header("location:transaction_data.php");
  }else{
    echo "error occured about inserting data";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../Bootstrap icon/icons/bootstrap-icons.css">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <div class="title">
    <h3 class="bi bi-chat"></h3>
    <h3>car Rental</h3>
  </div>

  <div class="actions">

  <h3><a href="dashboard.php" class="bi bi-box"> dashboard</a></h3>

  <div class="transactions">
  <h5 class="bi bi-car">transactions</h5>
  <h3><a href="transaction_data.php" class="bi bi-arrow-down-circle"> Rentals</a></h3>
  </div>

  <div class="data-master">
  <h5>data master</h5>
  <h3><a href="car_details.php" class="bi bi-arrow-down-circle"> car selection</a></h3>
  <h3><a href="customer_details.php" class="bi bi-arrow-down-circle"> customer section</a></h3>
  </div>

  </div>

</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()" class="showNav">&#9776;</span>

<div class="dash-info">

<h3 class="text-7">new transaction data</h3>

<form action="" method="POST" class="form-1" style="height: 510px;"> 

<div class="details">
    <label for="">customer</label>
    <input type="text" name="customer" placeholder="enter your customer name">
</div>

<div class="details">
    <label for="">car</label>
    <input type="text" name="car" placeholder="enter a car">
</div>

<div class="details">
    <label for="">borrow date</label>
    <input type="date" name="rentDate" placeholder="enter car borrow date">
</div>

<div class="details">
    <label for="">return date</label>
    <input type="date" name="returnDate" placeholder="enter car return date">
</div>

<div class="details">
    <label for="">total price</label>
    <input type="text" name="price" placeholder="enter total price">
</div>

<div class="details">
    <label for="">fine per day</label>
    <input type="text" name="fine" placeholder="fine per day">
</div>

<div class="details">
    <label for="">penalty</label>
    <input type="text" name="penalty" placeholder="enter penalty here">
</div>

<div class="details">
    <input type="submit" name="submit" placeholder="enter your customer name" value="submit data">
</div>

</form>

</div>

<script src="../main.js"></script>
</body>
</html>