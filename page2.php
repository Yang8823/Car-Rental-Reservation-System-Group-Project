<!DOCTYPE html>
<html>
<body>
<?php
    //Start the session
    session_start();

    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

?>
<p><a href="page1.php">To page1</a></p>

</body>
</html>