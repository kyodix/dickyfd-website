<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.</title>
    <link rel="stylesheet" href="stylish.css">
</head>
<body>
    <h1>Login</h1>
    <br>
    <!-- cek pesan notifikasi -->
    <?php
        if (isset($_GET['pesan'])) {
            if($_GET['pesan'] == "gagal") {
                echo "Login Failed! username and password wrong!";
            } else if ($_GET['pesan'] == "logout") {
                echo "you have success to logout";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "you must access this page to login";
            }
        }
    ?>
    <br>
    <br>
    <form method="post" action="cek_login.php">
        <div class="login">
            <p>Username</p>
            <input type="text" name="username">
            <p>Password</p>
            <input type="password" name="password">
            <br>
            <br>
            <br>
            <input type="submit" value="Login">
        </div>
    </form>
    <a href="../index.php"><button>back to home</button></a>
</body>
</html>