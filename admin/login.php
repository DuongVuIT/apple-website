<?php
session_start();
include('../admin/config/db.php');
if (isset($_POST['dangnhap'])) {
    $taikhoan = $_POST['username'];
    $matkhau =  md5($_POST['password']);
    $sql = "SELECT *FROM user WHERE username = '" . $taikhoan . "' AND password = '" . $matkhau . "'limit 1";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
    } else {
        echo '<script> alert("Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.)</script>';
        header("Location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            background: #f2f2f2;
            margin-top: 200px;
        }

        input[type="submit"] {
            
            padding: 10px 20px;
        }

        .wrapper-login {
            width: 15%;
            margin: 0 auto;
        }

        table.table-login {
            width: 100%;
        }

        table.table-login tr td {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper-login">
        <form action="" autocomplete="off" method="POST">
            <table border="1" class="table-login" style="text-align :center;border-collapse :collapse;">
                <tr>
                    <td colspan="2">
                        <h3>Đăng nhập Admin</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tài khoản
                    </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu
                    </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
                </tr>
            </table>

        </form>

    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>