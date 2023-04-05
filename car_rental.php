<!DOCTYPE html>
<html lang="en">
<head>
<style>	
    ul{
      list-style-type: circle;
      margin:0;
      padding:0%;
      background-color:#f1f1f1;
      position:fixed;
      height:100%;
      width:20%;
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


</style>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=devidce-wideth,initial-scale=1.0">
	<title>CAR RENTAL</title>
</head>
<body>


<ul>
      <li><a href="reservation.php">Home</a></li>
      <br>
      <li><a class="active"  href="car_rental.php">RentalDetails</a></li>
      <br>
      <li><a href="texting.php">CarType</a></li>
      <br>
      <li><a href="Login_page.html">LogOut</a></li>
     
 </ul>








</body>
</html>