<?php
include "connection.php";

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM customers WHERE id='$id'";
  $fetch = mysqli_query($con,$sql);
  $data = mysqli_fetch_array($fetch);
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

<h3 class="text-7">add new customer</h3>

<form action="php_update_customer.php" method="POST" class="form-1" style="height:450px;"> 

<input type="hidden" name="id" value="<?php echo $data["id"]; ?>">
<div class="details">
    <label for="">customer Name</label>
    <input type="text" name="customer" value="<?php echo $data["full_name"]; ?>"placeholder="enter your customer name">
</div>

<div class="details">
    <label for="">Customer Address</label>
    <input type="text"  name="address" value="<?php echo $data["address"]; ?>"placeholder="enter customer address">
</div>

<div class="details">
    <label for="">Phone Number</label>
    <input type="text" name="phone" value="<?php echo $data["contact"]; ?>" placeholder="enter your phone contact">
</div>

<div class="details">
    <label for="">Id Card Number</label>
    <input type="text" name="id_card" value="<?php echo $data["id_card"]; ?>"placeholder="enter your id car">
</div>

<div class="details">
    <label for="">Gender</label>
    <select name="gender" value="<?php echo $data["gender"]; ?>" >
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>

<div class="details">
    <label for="">Status:</label>
    <input type="text"  name="status" value="<?php echo $data["status"]; ?>" placeholder="enter customer status">
</div>

<div class="details">
    <input type="submit" name="submit" placeholder="enter your customer name" value="update data">
</div>

</form>

</div>

<script src="../main.js"></script>
</body>
</html>