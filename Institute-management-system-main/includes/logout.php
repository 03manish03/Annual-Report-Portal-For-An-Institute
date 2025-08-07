<?php
session_start();
$_SESSION = array(); // Clear all session variables
session_destroy(); // Destroy the session

// Redirect to login page
header("Location: ../Login/login.php");
exit();
?>
