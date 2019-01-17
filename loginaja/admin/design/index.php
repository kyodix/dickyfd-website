<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DESIGN</title>
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
    <h1>DESIGN</h1>
    <h3>INPUT DATA DESIGN</h3>
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
            $data = mysqli_query($koneksi, "SELECT * FROM design");
            while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['namadesign']; ?></td>
                    <td><?php echo $d['platformdesign']; ?></td>
                    <td><?php echo $d['gambardesign']; ?></td>
                    <td><?php echo $d['softdesign']; ?></td>
                    <td><?php echo $d['datedesign']; ?></td>
                    <td><?php echo $d['kategoridesign']; ?></td>
                    <td><?php echo $d['linkdesign']; ?></td>
                    <td><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></td>
                    <td><a href="delete.php?id=<?php echo $d['id']; ?>">DELETE</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>