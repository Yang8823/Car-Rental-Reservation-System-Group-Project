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

<?php 

if(isset($_POST['car_id'])){
    $Name=$_POST['car_id'];
    echo $Name;
}
?>