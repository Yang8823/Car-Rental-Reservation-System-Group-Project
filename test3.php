<?php
    include("connection.php");

    $staff_id = "Alex";
    $sql = "SELECT `email_address` FROM `staffaccounts` WHERE `staff_ID` = '$staff_id'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        //output the data
        while($row = mysqli_fetch_assoc($result)){
            $email = $row["email_address"];
        }
        echo $email;
    }else{
        echo "0 results";
    }
?>