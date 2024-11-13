<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form button{
        width:100px;
        height:30px;
        margin-left:20px;
        margin-top:10px;
        border-radius:5px;
        border:none;
        font-size:13px;
        text-transform:capitalize;
        font-weight:bold;
        background-color:#ff0000;
        color:#fff;
    }
    .form button a{
        color:#fff;
        text-decoration:none;
    }
    
    form h1{
     color:#4747d1;
    }
    form span{
        margin-left:300px;
        color:#ff0000;
    }
    form{
    margin-top: 1%;
    margin-left:370px;      
}

form label{
    text-transform: capitalize;
    font-family: cursive;
    font-weight: bold;
}

  input[type=text], select {
    width: 700px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=date], select {
    width: 400px;
    padding: 12px 20px;
    margin: 8px 300px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 100px;
    height: 45px;
    background-color:#4747d1;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    /* margin-left: 50px; */
    font-size: 18px;
  }
  
  input[type=submit]:hover {
    background-color: #89a88b;
  }
    </style>
</head>
<body>

<div class="form">
<button class="bi bi-arrow-return-left"> <a href="../index.html">go back</a></button>

<form action="" method="post" name="login">

<h1>Book Car</h1>
<input type="text" name="username" placeholder="Enter Your Names" required /><br>
<input type="text" name="password" placeholder="Enter Type Of Car" required /><br>
<span for="">Borrow Date:</span><input type="date" name="password" placeholder="Borrow Date" required /><br>
<span for="">Return Date:</span><input type="date" name="password" placeholder="Return Date" required /><br>
<input type="text" name="password" placeholder="Total price" required /><br>
<input type="text" name="password" placeholder="Fine per day" required /><br>
<input type="text" name="password" placeholder="Penalty" required />
<br>
<input name="submit" type="submit" value="Book" />

</form>
</div>

</body>
</html>