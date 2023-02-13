<?php
include 'login_submit.php';
include 'config.php';
    session_start();
    session_unset("user");
    header('location: login.php');
?>