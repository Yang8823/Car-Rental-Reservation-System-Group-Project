<?php
    include("connection.php");

    if(isset($_POST['submit'])){
        $staff_id = $_POST['staff_id'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $position = $_POST['position'];
        $hired_date = $_POST['hired_date'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        //check if passord match
        if($password != $confirm_password){
            echo "Password do not match";
            echo "<script>
                      window.location.href = 'Registration page.html';
                      alert('Password do not match');
                 </script>";
        }

        $sql = "SELECT * FROM `staffaccounts` WHERE `staff_ID` = '$staff_id' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        $sql = "INSERT INTO `staffaccounts` (`staff_ID`,`password`,`f_name`,`l_name`,`position`,`hire_date`,`email_address`,`phone_number`) VALUES ('$staff_id','$password','$first_name','$last_name','$position','$hired_date','$email','$phone_number')";
        mysqli_query($conn, $sql);

        header("Location:Login_page.html");
    }
?>