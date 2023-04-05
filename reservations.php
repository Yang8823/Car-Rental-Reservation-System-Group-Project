<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Reservation Log</title>
	<link rel="icon" href="img\logo.png">
	<!-- css link -->
    <link rel="stylesheet" href="reservationsLog.css">
    
<header>
    <a href="#" class="logo"><img src="img/logo.png" alt=""></a>

    <ul class="nav-bar">
        <li><a href="mainHome.html">Home</a></li>
    </ul>
    <span>Welcome<!--get staff name --></span>
    <div class="header-btn">
        <a href="Login page.html" class="log-out">Log Out</a>
    </div>
</header>

</head>
<main class="table">
	<section class="table_header">
		<body style="margin: 50px;">
		<!-- header containing logo, home, options, collections, welcome staff and log out -->
		<h1>Reservation Log</h1>
		<br>
	</section>
	<section class="table_body">
			<table class="table">
				<thead>
					<tr>
						<th>Reservation ID</th>
						<th>Type ID</th>
						<th>Staff ID</th>
						<th>Customer Name</th>
						<th>Pick-up date</th>
						<th>Drop-off date</th>
						<th>Reservation date</th>
						<th>Location</th>
						<th>Driver license no.</th>
						<th>Driver phone no.</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$conn=new mysqli("localhost","root","","comp1044_database");
					if ($conn->connect_error){
						die("Connection failed: " . $conn->connect_error);
					}

					$sql="SELECT * FROM reservationdetails";
					$result=$conn->query($sql);

					if (!$result){
						die("Invalid query: " . $conn->error);
					}

					while($row=$result->fetch_assoc()){
						echo "<tr>
							<td>" . $row["reservation_ID"] . "</td>
							<td>" . $row["type_ID"] . "</td>
							<td>" . $row["staff_ID"] . "</td>
							<td>" . $row["customer_name"] . "</td>
							<td>" . $row["pick_up_date"] . "</td>
							<td>" . $row["drop_off_date"] . "</td>
							<td>" . $row["reservation_date"] . "</td>
							<td>" . $row["location"] . "</td>
							<td>" . $row["driver_license_no"] . "</td>
							<td>" . $row["driver_phone_no"] . "</td>
						</tr>";
					}

					?>
				</tbody>
			</table>
		</section>
	</body>
</html>