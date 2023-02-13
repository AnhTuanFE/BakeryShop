<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
</head>
<body>
<h3>Đăng Nhập</h3>
    <form action="login_submit.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name = "username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name = "password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>          
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>