<?php
include 'config.php';
if( isset($_POST['submit1']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '' )
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $level = 0;
    $fullname = $_POST["fullname"];
    $dateofbirth = $_POST["dateofbirth"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];

    // kết nối với database user
    $sql = "SELECT *FROM user WHERE username='$username' ";
    $old = mysqli_query($conn,$sql);
    // mã hóa cả 2 mật khẩu để thuận lợi cho hàm so sánh mật khẩu
    $password = md5($password);
    $repassword = md5($repassword);
    // nếu trường hợp tài khoản đã tồn tại
    if( mysqli_num_rows($old) > 0) 
    {
        echo 'đăng ký thất bại, vui lòng tạo một tài khoản khác';
        require_once 'login.php';       
    }   
    // trường hợp mật khẩu không đồng nhất
    else if( $password != $repassword )
    {
        echo "Mật khẩu không đồng bộ";
        require_once 'login.php';
    }
    // trường hợp khác cho phép đăng kí thành công
    else
    {
        // chèn thêm thông tin vào database
    $sql = "INSERT INTO user (username,password,level,fullname,dateofbirth,sex,email,phonenumber,address) 
    VALUES ('$username','$password','$level','$fullname','$dateofbirth','$sex','$email','$phonenumber','$address') ";
    mysqli_query($conn,$sql);
    //$password = md5($password);
    echo "Đã đăng ký thành công";
    //đăng ký thành công thì chuyển sang đăng nhập
    require_once 'login.php';
    }      
}
else 
{
    header("location:register.php");
}

?>