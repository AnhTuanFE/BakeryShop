<?php
//session_start();
if( !isset($_SESSION["user"]) )
{
    header("location:login.php");
    //  <a href="logout.php">logout</a>
}
else
{
    header("location:index.html");
}
