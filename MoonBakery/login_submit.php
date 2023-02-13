<?php
// tạo 1 session để trước khi có thể truy cập file index phải đăng nhập thành công

include 'config.php';
session_start();
if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '' )
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);

    $sql = "SELECT *FROM user WHERE username='$username' AND password ='$password' ";
    $user = mysqli_query($conn,$sql);
    //echo $sql; exit();
    if( mysqli_num_rows($user) > 0) 
    {
        //echo "Bạn đã đăng nhập thành công";
        $_SESSION["user"] = $username;
        //header("location: index.php");
        require_once 'kiemtra.php';
    }
    else
    {
        echo "Bạn đã nhập sai username hoặc password !";
        require_once 'kiemtra.php';
    }
}
else 
{
    header("location: login.php");
}

?>
