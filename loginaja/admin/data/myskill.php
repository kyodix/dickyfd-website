<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Skill</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- cek apakah sudah login -->
    <?php
        session_start();
        if($_SESSION['status']!="login") {
            header("location:../index.php?pesan=belum_login");
        }
    ?>
    <a href="../index.php"><button>Back</button></a>
    <h1>MY SKILL</h1>
    <h3>INPUT DATA MY SKILL</h3>
    <form method="post" action="tambahskill.php">
        <p>NAME</p>
        <input type="text" name="nama">
        <p>IMAGE URL</p>
        <input type="text" name="gambar">
        <p>PERCENT</p>
        <input type="number" name="persen">
        <br>
        <br>
        <input type="submit" value="ADD">
    </form>
    <h3>RESULT DATA MY SKILL</h3>
    <table align="center";>
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>IMAGE</th>
            <th>PERCENT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
            include "../../../koneksi.php";
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM myskill");
            while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['namaskill']; ?></td>
                    <td><?php echo $d['gambarskill']; ?></td>
                    <td><?php echo $d['persenskill']; ?></td>
                    <td><a href="editskill.php?id=<?php echo $d['id']; ?>">EDIT</a></td>
                    <td><a href="deleteskill.php?id=<?php echo $d['id']; ?>">DELETE</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>