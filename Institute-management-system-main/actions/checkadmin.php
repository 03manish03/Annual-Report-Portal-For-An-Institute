<?php 
    session_start();
    if(!isset($_SESSION['login']) or ($_SESSION['usertype']!='admin'))
    {
        header('locaeion:../Login/login.php');
    }
?>