<?php 

session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
}

include "connection.php";

// deal with handling the number of customers in the system
$sql_customers = "SELECT COUNT(*) AS customers_number FROM customers";
$customers_fetch = mysqli_query($con,$sql_customers);
$customers_fetch_statement = mysqli_fetch_array($customers_fetch);
$data_customer_statement = $customers_fetch_statement['customers_number'];

// dela with handling the number of transactions in the system
$sql_transactions = "SELECT COUNT(*) AS transactions_number FROM rentals";
$transactions_query = mysqli_query($con,$sql_transactions);
$transactions_fetch = mysqli_fetch_array($transactions_query);
$transactions_data = $transactions_fetch['transactions_number'];

// deal with handling the number of cars in the system
$sql_cars = "SELECT COUNT(*) AS cars_number FROM cars";
$cars_query = mysqli_query($con,$sql_cars);
$cars_fetch = mysqli_fetch_array($cars_query);
$cars_data = $cars_fetch['cars_number'];

// deal with handling the number of completed trabsactions in the system 
$sql_completed_transaction = "SELECT COUNT(*) AS completed_transactionss FROM complete_transactions";
$completed_query = mysqli_query($con,$sql_completed_transaction);
$completed_fetch = mysqli_fetch_array($completed_query);
$completed_data = $completed_fetch['completed_transactionss'];

// deal with handling the lastest added cars in database
 
$sql_latest_car = "SELECT * FROM cars ORDER BY id DESC LIMIT 1";
$latest_query = mysqli_query($con,$sql_latest_car);
$latest_fetch = mysqli_fetch_array($latest_query);
$latest_data = $latest_fetch['car_name'];

// dea with handling the latest customer in the database
$sql_latest_customer = "SELECT * FROM customers ORDER BY id DESC LIMIT 1";
$latest_customer_query = mysqli_query($con,$sql_latest_customer);
$latest_cutomer_fetch = mysqli_fetch_array($latest_customer_query);
$latest_customer_data = $latest_cutomer_fetch['full_name'];

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
    <h3 class="bi bi-car-front"></h3>
    <h3>car Rentals</h3>
  </div>

  <div class="actions">

  <h3><a href="dashboard.php" class="bi bi-border-style"> dashboard</a></h3>

  <div class="transactions">
  <h5 class="bi bi-car">transactions</h5>
  <h3><a href="transaction_data.php" class="bi bi-boxes"> Rentals</a></h3>
  </div>

  <div class="data-master">
  <h5>data master</h5>
  <h3><a href="car_details.php" class="bi bi-car-front-fill"> car selection</a></h3>
  <h3><a href="customer_details.php" class="bi bi-people-fill"> customer section</a></h3>
  </div>

  </div>

</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()" class="showNav">&#9776;</span>

<nav>
    <form action="logout.php" method="POST">
    <button type="submit" style="margin-left:181.3vh"; >logout</button>
    </form>
</nav>

<div class="dash-info">
    <h3 class="text-1">dashboard</h3>
    
    <div class="cards">
    <div class="card">
        <div class="numbers">
        <h3>available cars</h3>
        <h3 class=""><?php echo $cars_data;?></h3>
        </div>
        <h3 class="bi bi-car-front-fill" style="font-size:37px;"></h3>     
    </div>

    <div class="card" style="border-left: 5px solid green;">
        <div class="numbers">
        <h3>customers</h3>
        <h3 class=""><?php echo $data_customer_statement;?></h3>
        </div>
        <h3 class="bi bi-people" style="font-size:37px;"></h3>     
    </div>

    <div class="card" style="border-left: 5px solid yellow;">
        <div class="numbers">
        <h3>transactions</h3>
        <h3 class="">7</h3>
        </div>
        <h3 class="bi bi-signpost-2 " style="font-size:37px;"></h3>     
    </div>

    <div class="card" style="border-left: 5px solid orange;">
        <div class="numbers">
        <h3 style="font-size:13px">Completed Transactions</h3>
        <h3 class=""><?php echo $completed_data; ?></h3>
        </div>
        <h3 class="bi bi-shuffle " style="font-size:37px;"></h3>     
    </div>
    </div>
    
    <div class="news">

    <div class="new">
        <h3 class="text-3">new cars</h3>

        <div class="one">
            <h3 class="text-4 bi bi-car-front"> <?php echo $latest_data; ?></h3>
            <p class="but">available</p>
        </div>

        <div class="one">
            <h3 class="text-4 bi bi-car-front"> hundai tacson</h3>
            <p class="but">available</p>
        </div>

        <div class="one">
            <h3 class="text-4 bi bi-car-front"> audi Q7</h3>
            <p class="but">available</p>
        </div>
    </div>

    <div class="new">
        <h3 class="text-3">new customers</h3>

        <div class="one">
            <h3 class="text-4 bi bi-person-fill"> <?php echo $latest_customer_data; ?></h3>
            <p class="but">available</p>
        </div>

        <div class="one">
            <h3 class="text-4 bi bi-person-fill"> twarayisabye strato</h3>
            <p class="but">available</p>
        </div>

        <div class="one">
            <h3 class="text-4 bi bi-person-fill"> farkhan happy</h3>
            <p class="but">available</p>
        </div>
    </div>

    </div>

    <div class="history">
        <h3 class="text-5">latest transactions data</h3>    

  <!-- <center> -->
  <table style="width:90%;">
  <tr>
    <th>Transaction Date</th>
    <th>Customer</th>
    <th>Car</th>
    <th>Rent</th>
    <th>Return</th>
    <th>Total</th>
    <th>price</th>
    <th>fine i.d</th>
    <th>Status</th>
  </tr>

  <?php 
  $count=1;
  $sql = 'SELECT * FROM complete_transactions';
  $fetch = mysqli_query($con,$sql);
  
  if(mysqli_num_rows($fetch)){
    while($row= mysqli_fetch_array($fetch)){
  ?>
   <tr>
    <td><?php echo $count++; ?></td>
    <td><?php echo $row['transaction_date']; ?></td>
    <td><?php echo $row['customer']; ?></td>
    <td><?php echo $row['date_of_rent']; ?></td>
    <td><?php echo $row['date_of_return']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['fine_per_day']; ?></td>
    <td><?php echo $row['penalty']; ?></td>
    <td><?php echo $row['status']; ?></td>
   </tr>
  <?php
  }
}
  ?>
</table>
<!-- </center> -->

</div>

</div>

<script src="../main.js"></script>
</body>
</html>