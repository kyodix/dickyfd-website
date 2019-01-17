<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEBSITE</title>
    <link rel="stylesheet" href="styles.css">
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
    <h1>WEBSITE</h1>
    <h3>INPUT DATA WEBSITE</h3>
    <form method="post" action="tambah.php">
        <p>NAME</p>
        <input type="text" name="nama">
        <p>PLATFORM</p>
        <input type="text" name="platform">
        <p>IMAGE URL</p>
        <input type="text" name="gambar">
        <p>SOFTWARE</p>
        <input type="text" name="software">
        <p>DATE</p>
        <input type="text" name="date">
        <p>CATEGORY</p>
        <input type="text" name="kategori">
        <p>LINK</p>
        <input type="text" name="link">
        <br>
        <br>
        <input type="submit" value="ADD">
    </form>
    <h3>RESULT DATA MY SKILL</h3>
    <table align="center";>
        <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>PLATFORM</th>
            <th>IMAGE</th>
            <th>SOFTWARE</th>
            <th>DATE</th>
            <th>KATEGORI</th>
            <th>LINK</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        <?php
            include "../../../koneksi.php";
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM website");
            while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['namawebsite']; ?></td>
                    <td><?php echo $d['platformwebsite']; ?></td>
                    <td><?php echo $d['gambarwebsite']; ?></td>
                    <td><?php echo $d['softwebsite']; ?></td>
                    <td><?php echo $d['datewebsite']; ?></td>
                    <td><?php echo $d['kategoriwebsite']; ?></td>
                    <td><?php echo $d['linkwebsite']; ?></td>
                    <td><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></td>
                    <td><a href="delete.php?id=<?php echo $d['id']; ?>">DELETE</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>