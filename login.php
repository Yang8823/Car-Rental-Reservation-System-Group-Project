<?php
    include("connection.php");

    if(isset($_POST['submit'])){
        $staff_id = $_POST['staff_id'];
        $password = $_POST['password']; 

        $sql = "SELECT * FROM `staffaccounts` WHERE `staff_ID` = '$staff_id' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==1){
            header("Location:Main page.html");
        }
        else{
            echo"<script>
                    window.location.href = 'Login_page.html';
                    alert('Login failed. Invalid Staff ID or Password');
                </script>";
        }
    }
?>