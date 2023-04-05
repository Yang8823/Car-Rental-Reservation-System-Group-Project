<?php
    require "vendor/autoload.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    
    include("connection.php");

    session_start();

    $staff_id = $_POST['staff_id'];
    $_SESSION["staff_id"] = $staff_id;
    echo "Staff id is " . $staff_id;
    
    if(isset($_POST['submit'])){

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
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==1){
            $vertification_code = rand(100000, 999999);
            echo "verification code is " . $vertification_code . ".";

            $sql = "UPDATE `staffaccounts` SET `vertification_code` = '$vertification_code' WHERE `staff_ID` = '$staff_id'";
            mysqli_query($conn, $sql);

            $mail = new PHPMailer(true);

            $mail ->SMTPDebug = SMTP::DEBUG_SERVER;
            
            $mail ->isSMTP();
            $mail ->SMTPAuth = true;
            
            $mail ->Host = "smtp.gmail.com";
            $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail ->Port = 587;
            
            $mail ->Username = "yangsmtpserver@gmail.com";
            $mail ->Password = "bwvflcpslhinfxsh";
            
            // $mail ->setForm($email, $name);
            $mail ->setFrom("yangsmtpserver@gmail.com", "Car Rental Reservation System");
            $mail ->addAddress($email,$staff_id);
            
            $mail ->Subject = "Forget Password Verification Code";
            $mail ->Body = "Your verification code is " . $vertification_code;
            
            $mail ->send();
            
            echo "Email sent successfully!";
            
            // if(mail($to, $subject, $message, $headers)){
            //     echo 'Email sent successfully.';
            // }else{
            //     echo 'An error has occurred while sending the email.';
            // }

            header("Location:Vertification page.html");
        }
        else{
            echo "Email address not found.";
            echo"<script>
                    window.location.href = 'Forget page.html';
                    alert('Invalid Staff ID');
                </script>";
        }
    }


?>