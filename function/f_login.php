<?php
    include "koneksi.php";

    // disable file hijack
    if(!isset($_POST['login']))
    {
        // force back to another page
        // header("location: ../login.php");

        echo "Button not clicked!";
    }

    $username = $_POST['username']; // get username. for secure data you can use additional function like mysqli_real_escape_string()
    $password = $_POST['password']; // get password.

    $sql = "SELECT `username`,`password` FROM `users` WHERE `username` = '$username'";
    // check query
    if($mysqli->query($sql))
    {
        // check data
        $result = $mysqli->query($sql);
        if(!empty($result->num_rows))
        {
            // validate password
            $data = $result->fetch_assoc();

            if(!password_verify("$password", $data['password']))
            {
                die("password was wrong");
            }
        } else 
        {
            die ("Data empty. go back to login page");
        }
        
    } else
    {
        echo "$mysqli->error";
    }

    // when all gate success
    // force to admin page
    echo "Login success";
