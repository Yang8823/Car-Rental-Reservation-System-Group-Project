<!DOCTYPE html>
<html>
<body>
<?php
    //Start the session
    session_start();

    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";

    echo "Session variable are set.";

?>
<p><a href="page2.php">To page2</a></p>

</body>
</html>