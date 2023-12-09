<?php
    session_start();
    if ($_SESSION['status']!="login") {
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>tampil</title>
</head>

<body>

    <h1>selamat berhasil login</h1>

    <a href="logout.php">logout</a>
</body>

</html>