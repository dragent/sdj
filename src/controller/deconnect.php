<?php 
    session_start();
    unset($_SESSION["newsession"]);
    unset($_POST["on"]);
    header('Location: ../../');
    exit();