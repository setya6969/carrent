<?php
    $mysqli = new mysqli("localhost","root","whoami","takeit_db");

    if($mysqli->connect_errno)
    {
        echo "connection error [" . $mysqli->connect_error ."]";
        // close connection
        $mysqli->exit;
    }

?>


