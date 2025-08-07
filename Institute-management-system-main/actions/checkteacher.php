<?php 
    session_start();
    if(!isset($_SESSION['login']) or ($_SESSION['usertype']!='teacher'))
    {
        header('locaeion:../Login/login.php');
    }
?>