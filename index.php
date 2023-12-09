<?php
    require'koneksi.php';

    // menangkap data yang dikirim dari form
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //menyeleksi data user dengan username dan passord yang sesuai
        $data = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");

        //menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data);

        if ($cek > 0) {
            $_SESSION['status'] = "login";
            header("location: tampil.php");
        } else {
            echo "<script>windows.alert('kesalahan login')
            windows.location='index.html'</script>";
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Md5</title>
    <style type="text/css">
    body {
        font-family: sans-serif;
        background-color: #f20d8a;
    }

    .login {
        padding: 2em;
        margin: 6em auto;
        width: 17em;
        background: #fff;
        border-radius: 3px;
    }

    input {
        border-radius: 5px;
        padding: 5px;
        background: #efefef;
    }
    </style>
</head>

<body>

    <div class="login">
        <h2>LOGIN</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                    <td colspan="2">
                        <input type="submit" name="login" value="Login">
                    </td>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>