<?php
    session_start();
    
    include("connection.php");

    $staff_id = $_SESSION["staff_id"];
    echo nl2br("\nsession staff id is: " . $_SESSION["staff_id"]);
    echo nl2br("\nstaff id is: " . $staff_id);

    if(isset($_POST['submit'])){
        $password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_new_password'];

        echo "password is: " . $password;
    
        //check if password match
        if($password != $confirm_password){
            echo "Password do not match";
            echo "<script>
                      window.location.href = 'Change password.html';
                      alert('Password do not match');
                 </script>";
        }
        
        $sql = "UPDATE `staffaccounts` SET `password` = '$password' WHERE `staff_ID` = '$staff_id'";

        if(mysqli_query($conn, $sql)){
            echo "Password updated successfully";
            echo "<script>
                    window.location.href = 'Login_page.html';
                    alert('Password updated successfully');
                 </script>";
        }else{
            echo "Error updating password: " . mysqli_error($conn);
        }
    }
?>