<?php
    // Start the session
    session_start();

    // Set session variables
    $_SESSION["is_login"] = TRUE;

    // echo $_SESSION["is_login"];

    if(isset($_SESSION["is_login"])&& $_SESSION["is_login"] == True ){
        header("Location: admin/index.php");
    } 
    else {
        header("Location: login.php");
    }
?>