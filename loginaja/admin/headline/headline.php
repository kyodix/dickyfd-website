<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Skill</title>
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
    <h1>HEADLINE</h1>
    <h3>INPUT DATA HEADLINE</h3>
    <form method="post" action="tambahheadline.php">
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
            $data = mysqli_query($koneksi, "SELECT * FROM headline");
            while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['namaheadline']; ?></td>
                    <td><?php echo $d['platformheadline']; ?></td>
                    <td><?php echo $d['gambarheadline']; ?></td>
                    <td><?php echo $d['softheadline']; ?></td>
                    <td><?php echo $d['dateheadline']; ?></td>
                    <td><?php echo $d['kategoriheadline']; ?></td>
                    <td><?php echo $d['linkheadline']; ?></td>
                    <td><a href="editheadline.php?id=<?php echo $d['id']; ?>">EDIT</a></td>
                    <td><a href="deleteheadline.php?id=<?php echo $d['id']; ?>">DELETE</a></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>