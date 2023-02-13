<!-- khách hàng phản hồi và gửi thông tin lên database
 thông tin gồm
 - id
- họ và tên đệm
- tên
- ngày sinh
- giới tính
- email
- số điện thoại
- tên tài khoản
- mật khẩu
 ------ database phản hồi
 - id khách hàng
 - họ và tên khách hàng
 - ý kiến phản hồi từ khách hàng
b1: tạo 1 database trên mysql vs các thông tin trên
b2: tao 1 database phản hồi trên my sql chứa id, họ và tên với phản hồi từ người dùng
b3: tạo liên kết giữa các bảng bằng id-chung
b4: tạo file php đăng nhập và trong index.php cho phep người dùng phản hồi và lưu thông tin phản hồi trên php
b5. tạo 1 trang load thông tin từ database phản hồi lên để quản lý cho dễ
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phản hồi</title>
</head>
<body>
    <div class="main">
        <h2> Phản hồi từ khách hàng</h2>
        <form action="phanhoi_submit.php" method="POST" class="FormPH">
            <table id="tableDG">
                <tr>
                    <td class="ThongTin">Họ và tên</td>
                    <td><input type="text" name = "fullname_PH" class="txbPH"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Vấn đề</td>
                    <td><input type="text" name = "vande_PH" class="txbPH"></td>
                </tr>
                <tr>
                    <td class="ThongTin">Nội dung</td>
                    <td><input type="text" name = "noidung_PH" class="txbPH"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="send" class="btnSend">Gửi phản hồi</button>
                        <button type="reset" class="btnReset">Làm mới</button>          
                    </td>
                </tr>
            </table>
        </form>
    </div>
    
</body>
</html>