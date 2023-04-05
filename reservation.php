<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_rental_reservation_system";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
<link rel="stylesheet" type="text/css" href="mainHome.css">
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <style>

    body{
      background:url("rental.jpg") no-repeat center fixed;
      background-size:cover;

    }

    h1 {
      text-align: center;
      font-size: 40px;
      font-family:Georgia,serif; 
    }

    .font{
    font-family:Cursive,sans-serif;
    font-size:38px;
    color:aliceblue;
    }

    .dropdown {
      height: 35px;
      width: 140px;
      padding: 5px;
      margin: 15px 10px 10px 10px;
      border: 1px solid #c0c0c0;
      border-radius: 4px;
    }

    ul{
      list-style-type: circle;
      margin:0;
      padding:0%;
      background-color:#f1f1f1;
      opacity:0.8;
      position:fixed;
      height:30%;
      width:10%;
      overflow:auto;

    }

    li a{
      display:block;
      color:#000;
      padding:8px 16px;
      text-decoration:none;
    }

    li a.active{
      background-color:#04AA6D;
      color:white;
    }
    
    li a:hover:not(.active){
      background-color:#555;
      color:white;
    }

    .center {
      position: absolute;
      top: 50%;
      width:100%;
      text-align: center;
    }

    .labels {
      display: inline-block;
      text-align: middle;
      width: 20%;
      padding: 5px;
      vertical-align: top;
      margin-top: 10px;
    }

  </style>
</head>

<body>

    <ul>
      <li><a class="active" href="reservation.php">Home</a></li>
      <br>
      <li><a href="car_rental.php">RentalDetails</a></li>
      <br>
      <li><a href="texting.php">CarType</a></li>
      <br>
      <li><a href="Login_page.html">LogOut</a></li>
    </ul>
          


    <div class="center">

    <section class="options" id="options">

<div class="heading"></div>

<div class="options-area">
    <div class="opt">
        <i class='bx bxs-calendar-check'></i>
        <h2>Make reservations</h2>
        <p>Select a car, pick<br>reservation dates and location.</p>
    </div>

    <div class="opt">
        <i class='bx bxs-calendar-edit' ></i>
        <h2>Modify reservations</h2>
        <p>Change cars, change dates<br>or location. </p>
    </div>

    <div class="opt">
        <i class='bx bxs-calendar-x'></i>
        <h2>Cancel reservations</h2>
        <p>Cancel<br>the complete booking.</p>
    </div>
</div>
</section>

      
</body>

</html>