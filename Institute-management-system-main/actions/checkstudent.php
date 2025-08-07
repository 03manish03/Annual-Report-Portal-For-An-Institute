<?php 
    session_start();
    if(!isset($_SESSION['login']) or ($_SESSION['usertype']!='student'))
    {
        header('locaeion:../Login/login.php');
    }
?>