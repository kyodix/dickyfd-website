<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="stailz.css">
</head>
<body>
    <h1>ADMIN PAGE</h1>
    <!-- cek apakah sudah login -->
    <?php
        session_start();
        if($_SESSION['status']!="login") {
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <h2><a href="data/myskill.php">MY SKILL</a></h2>
    <h2><a href="headline/headline.php">HEADLINE</a></h2>
    <h2><a href="design">DESIGN</a></h2>
    <h2><a href="video">VIDEO</a></h2>
    <h2><a href="games">GAMES</a></h2>
    <h2><a href="music">MUSIC</a></h2>
    <h2><a href="website">WEBSITE</a></h2>
    <h2><a href="application">APPLICATION</a></h2>
    <a href="logout.php"><button>Log out</button></a>
    <br>
    <br>
    <br>
</body>
</html>