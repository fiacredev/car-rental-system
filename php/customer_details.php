<?php
include "connection.php";

// if(isset($_GET['id'])){
//   $id = $_GET['id'];
//   $sql = "SELECT * FROM crentals WHERE id='$id'";
//   $fetch = mysqli_query($con,$sql);
//   $data = mysqli_fetch_array($fetch);
// }

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
    <div class="history">
    <h3 class="text-5">This is about customer details  data..</h3>    
    <p class="text-6"><a href="add_customer.php">+add New Customer</a></p>

  <table style="width:90%">
  <tr>
    <th>#</th>
    <th>Full Name</th>
    <th>Gender</th>
    <th>Contact</th>
    <th>Id Card</th>
    <th>Address</th>
    <th>Status</th>
    <th>Action</th>
  </tr>

  <?php
  $count = 1;
  $sql = "SELECT * FROM customers";
  $fetch = mysqli_query($con,$sql);
  
  if(mysqli_num_rows($fetch)>0){
    while($row = mysqli_fetch_array($fetch)){
  ?>

  <tr>
    <td><?php echo $count++; ?></td>
    <td><?php echo $row['full_name']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['id_card']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['status']; ?></td>
    
    <!-- deal with actions like delete and update -->
     <td><a class="update" href="update_customer.php?id=<?php echo $row['id']; ?>">update</a></td>
     <td><a class="delete" href="delete_customer.php?id=<?php echo $row['id']; ?>">delete</a></td>
  </tr> 

<?php 
}
}
?>
</table>

</div>

</div>

<script src="../main.js"></script>
</body>
</html>