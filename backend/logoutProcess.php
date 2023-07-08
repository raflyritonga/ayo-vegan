<?php
    
     // Start or resume the current session
     session_start();

     // Clear all session variables
     $_SESSION = array();

     // Destroy the session
     session_destroy();

     // Redirect the user to the login page or any other desired page
     echo '<script>alert("Logout Succeed, See ya!")</script>';
     echo "<script>window.location = '../index.php'</script>";

     exit;
?>