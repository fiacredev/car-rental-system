<?php 

include "connection.php";

if(isset($_POST['submit'])){

 $car_name = $_POST['name'];
 $car_number = $_POST['number'];
 $car_color= $_POST['color'];
 $vehicle_year = $_POST['vehicle'];
 $car_model = $_POST['model'];
 $car_status = $_POST['status'];

 $sql = "INSERT INTO cars(car_number,car_color,production_year,model,status,car_name) 
 VALUES('$car_number','$car_color','$vehicle_year','$car_model','$car_status','$car_name')";

 $insert = mysqli_query($con,$sql);

 if($insert){
    echo "data inserted successfully";
    header("location:car_details.php");
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

<h3 class="text-7">Add Rental car details..</h3>

<form action="" method="POST" class="form-1" style="height:450px"> 

<div class="details">
    <label for="">Car name</label>
    <input type="text" name="name" placeholder="Enter car name here">
</div>

<div class="details">
    <label for="">car number</label>
    <input type="text" name="number" placeholder="enter car number">
</div>

<div class="details">
    <label for="">color</label>
    <input type="text" name="color" placeholder="enter car color">
</div>

<div class="details">
    <label for="">vehicle year</label>
    <input type="date" name="vehicle" placeholder="enter vehicle year">
</div>

<div class="details">
    <label for="">car status</label>
    <input type="text" name="status" placeholder="enter if avialable or not">
</div>

<div class="details">
    <label for="">car model</label>
    <input type="text" name="model" placeholder="enter if avialable or not">
</div>

<div class="details">
    <input type="submit" name="submit" placeholder="enter your customer name" value="submit data">
</div>

</form>

</div>

<script src="../main.js"></script>
</body>
</html>