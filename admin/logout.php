<?php
    // Start the session
    session_start();

    // Set session variables


    // echo $_SESSION["is_login"];


   session_destroy();
   header("Location: ../login.php");
?>