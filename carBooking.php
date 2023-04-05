<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Make reservation</title>

    <!-- css link -->
    <link rel="stylesheet" href="carBooking.css">

</head>
<body>
    <!-- header containing logo, home, options, collections, reservation log and log out -->
    <header>
        <a href="mainHome.html" class="logo"><img src="img/logo.png" alt=""></a>

        <ul class="nav-bar">
            <li><a href="mainHome.html">Home</a></li>
            <li><a href="reservations.php">Reservations Log</a></li>
        </ul>

        <div class="header-btn">
            <a href="Login page.html" class="log-out">Log Out</a>
        </div>
    </header>
    
    <section class="details" id="details">
        <div class="form-area">
            
            <?php 
            session_start();
            $conn = new mysqli("localhost", "root", "", "comp1044_database");
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }?>


            <form name= "form1" action="carBooking.php" method="POST">
                <div class="text">
                    <h3>New Reservation</h3>
                </div>

            <select id="drop-down" class="drop-down" name="car_type" value="Car Type">

                <option value="none" selected disabled hidden>Select car type</option>

                <?php
                $sql = "SELECT * FROM vehicledetails";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  // output type of each row
                  while ($rowOption = $result->fetch_assoc()) {
                    $products[] = $rowOption;
                    
                  }
                  foreach($products as $prodType){?>
                    <option value="<?php echo $prodType['type_ID']?>"><?php echo $prodType['model']?></option>
                  <?php }
                } 
                ?>

            </select>

            <div class="input-field">
                <span>Staff ID</span>
                <input type="text" name="staffID" id="staffID" placeholder="Enter staff ID" required>
            </div>
            <div class="input-field">
                <span>Customer Name</span>
                <input type="text" name="customerName" id="custName" placeholder="Enter name" required>
            </div>  

            <div class="input-field">
                <span>Pick-Up Date</span>
                <input type="date" name="pickUpDate" id="pickUp" required>
            </div>
            <div class="input-field">
                <span>Drop-off Date</span>
                <input type="date" name="dropOffDate" id="dropOff" required>
            </div>
            <div class="input-field">
                <span>Location</span>
                <input type="text" name="location" id="" placeholder="Enter a location" required>
            </div>
            <div class="input-field">
                <span>Driver License Number</span>
                <input type="text" name="driverLicenseNo" id="loc" placeholder="Enter driver license number" required>
            </div>
            <div class="input-field">
                <span>Driver Phone Number</span>
                <input type="text" name="driverPhoneNo" id="phoneNo" placeholder="Enter driver phone number" required>
            </div>
            <input type="submit" name="generate" id="" class="btn" value="Generate">
        </form>
            <!--AND (drop_off_date > date 'echo date("Y/m/d");') AND pick_up_date >= date 'echo date("Y/m/d");'AND pick_up_date < drop_off_date; CHECK DATES-->

            <?php
            $available=false;
            if (isset($_POST['generate'])){

                $carType=$_SESSION['car_type']=$_POST['car_type'];
                $_SESSION['staffID']=$_POST['staffID'];
                $_SESSION['customerName']=$_POST['customerName'];
                $pickUp=$_SESSION['pickUpDate']=$_POST['pickUpDate'];
                $dropOff=$_SESSION['dropOffDate']=$_POST['dropOffDate'];
                $_SESSION['location']=$_POST['location'];
                $_SESSION['driverLicenseNo']=$_POST['driverPhoneNo'];
                $_SESSION['driverPhoneNo']=$_POST['driverPhoneNo'];

                //check if dropOff date is after pickUp date
                if ($_SESSION['pickUpDate']<=$_SESSION['dropOffDate']){

                    //check if same type of car is already reserved and how many
                    $checkType="SELECT * FROM reservationdetails WHERE type_ID='$carType'";
                    $resultType = $conn->query($checkType);
                    $count=0;
                    if ($resultType->num_rows > 0) {
                      while ($rowType = $resultType->fetch_assoc()) {
                        $products[] = $rowType;
                        }

                        foreach($products as $product){
                            if ($product['type_ID'] == $carType){
                            $count++;
                            }
                        }
                    }

                    //check count value to check if atleast 1 car of selected type is available
                    if ($count>=5){
                        //all 5 cars of the chosen model are reserved
                        //check availability of dates
                        $checkDates="SELECT *
                                    FROM reservationdetails
                                    WHERE(
                                    (
                                        (pick_up_date >= date '$pickUp' AND pick_up_date <= date '$dropOff')
                                    OR (drop_off_date <= date '$pickUp' AND drop_off_date >= date '$pickUp')
                                    OR (pick_up_date <= date '$pickUp' AND drop_off_date >= date '$dropOff')
                                    )
                                        );";

                        $resultDates = $conn->query($checkDates);

                        if ($resultDates->num_rows == 0) {
                            // selected dates are available for selected type
                            $available=true;
                        }
                        else{
                            //selected dates are not available
                            //display a message using alert with javascript
                            echo '<script>alert("Selected dates are not available for chosen model. Please choose a different model or different dates.")</script>';
                        }
                    }                
                    else{
                        //atleast 1 car of the model is available
                        $available=true;
                    }

                }
                else{
                    ?>
                    <script>
                        alert("Invalid drop-off date");
                    </script>
                    <?php
                }
            }
            if ($available==true){
                //proceed to insert into database reservation details table
                $count++;

                //$carType;
                $staffID = $_SESSION['staffID'];
                $custName = $_SESSION['customerName'];
                // $pickUp;
                // $dropOff;
                $reservationDate = date("Y-m-d");
                $location = $_SESSION['location'];
                $driverLicenseNo = $_SESSION['driverLicenseNo'];
                $driverPhoneNo = $_SESSION['driverPhoneNo'];
                //strip the - off the dates for the reservationID!!
                $pickUpStr=str_replace("-", "",$pickUp);
                $dropOffStr=str_replace("-", "",$dropOff);
                $reservationID = (string)$count . $carType . $pickUpStr . $dropOffStr;

                $record = "INSERT INTO reservationdetails (reservation_ID,type_ID,staff_ID,customer_name,pick_up_date,drop_off_date,reservation_date,location,driver_license_no,driver_phone_no) VALUES ('$reservationID','$carType','$staffID','$custName','$pickUp','$dropOff','$reservationDate','$location','$driverLicenseNo','$driverPhoneNo')";
                
                if ($conn->query($record) === TRUE) {
                    echo "Reservation successful";
                    }
                else {
                    echo "Error: " . $record . "<br>" . $conn->error;
                    }

                
                ?>

                <span id="showDate">
                <script>
                    //generating todays date
                    const m = new Date().getMonth()+1;
                    if (m<10){
                        var month = "0"+m;
                    }
                    const d = new Date().getDate();
                    if (d<10){
                        var date = "0"+d;
                    }
                    
                    //displaying todays date
                    document.getElementById("showDate").innerHTML = "Reservation Date: " + date + "-" + month + "-" + new Date().getFullYear();
                    //displaying reservation details from database
                    document.getElementById("showDate").innerHTML = "\nStaff ID: " + document.getElementById("staffID").value + "\nCustomer Name: " + document.form1.customerName.value + "\nPick-up Date: " + document.form1.pickUpDate.value + "\nDrop-off Date: " + document.form1.dropOffDate.value + "\nLocation: " + document.form1.location.value;
                </script>
                </span>

            <div class="opt-img">
                <!-- displaying image -->
                <?php
                if (isset($_POST['generate'])){
                    $result = $conn->query("SELECT * FROM vehicledetails WHERE type_ID = '$carType';");
                    while($row = $result->fetch_assoc()){
                        $res[]=$row;
                    }
                    foreach ($res as $row1);
                ?>

                <img src = "<?php echo $row1['img'];?>">

                <?php
                }
                ?>
            
            <?php
            }

            //close database connection
            $conn->close();

            ?>

            </div>
        </div>
    </section>
    <script>
        //generating todays date
            const m = new Date().getMonth()+1;
            if (m<10){
                var month = "0"+m;
            }
            const d = new Date().getDate();
            if (d<10){
                var date = "0"+d;
            }
            // this date is for restricting calendar past dates
            var today = new Date().getFullYear() + "-" + month + "-" + date;
            document.getElementById("pickUp").setAttribute('min',today);
            document.getElementById("dropOff").setAttribute('min',today);
        </script>
    </body>
</html>