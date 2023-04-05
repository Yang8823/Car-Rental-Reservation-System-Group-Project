<?php
    include("connection.php");

    session_start();

    $staff_id = $_SESSION["staff_id"];

    if(isset($_POST['submit'])){
        $vertification_code = $_POST['vertification_code'];

        $sql = "SELECT * FROM `staffaccounts` WHERE `staff_ID` = '$staff_id' and `vertification_code` = '$vertification_code'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==1){
            header("Location:Change password.html");
        }
        else{
            echo"<script>
                    window.location.href = 'Vertification page.html';
                    alert('Invalid vertification code');
                </script>";
        }
    }
?>