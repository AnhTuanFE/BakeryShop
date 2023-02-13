<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dang ky</title>
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div id="main">
        <h3 id="DangKi">Đăng kí thành viên</h3>
        <form action="register_submit.php" method="POST" class="FormDK">
            <table id="tableDK">
                <tr>
                    <td class="ThongTin">Tên đăng nhập</td>
                    <td><input type="text" name = "username" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Mật khẩu</td>
                    <td><input type="password" name = "password" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Nhập lại mật khẩu:</td>
                    <td><input type="password" name = "repassword" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Họ và tên</td>
                    <td><input type="text" name = "fullname" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Ngày Sinh</td>
                    <td><input type="text" name = "dateofbirth" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Giới tính</td>
                    <td><input type="text" name = "sex" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Email</td>
                    <td><input type="text" name = "email" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Số điện thoại</td>
                    <td><input type="text" name = "phonenumber" class="txbDK"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Địa chỉ</td>
                    <td><input type="text" name = "address" class="txbDK"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit" class="btnDangKi">Đăng kí</button>
                        <button type="reset" class="btnReset">Làm mới</button>          
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
    
    
</body>
</html>