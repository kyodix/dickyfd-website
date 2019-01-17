<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Video</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="index.php"><button>Back to Administration VIDEO</button></a>
    <h3>EDIT DATA VIDEO</h3>
    <?php
        include '../../../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM video WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <p>NAME</p>
                <input type="text" name="nama" value="<?php echo $d['namavideo']; ?>">
                <p>PLATFORM</p>
                <input type="text" name="platform" value="<?php echo $d['platformvideo']; ?>">
                <p>IMAGE URL</p>
                <input type="text" name="gambar" value="<?php echo $d['gambarvideo']; ?>">
                <p>SOFTWARE</p>
                <input type="text" name="software" value="<?php echo $d['softvideo']; ?>">
                <p>DATE</p>
                <input type="text" name="date" value="<?php echo $d['datevideo']; ?>">
                <p>CATEGORY</p>
                <input type="text" name="kategori" value="<?php echo $d['kategorivideo']; ?>">
                <p>LINK</p>
                <input type="teks" name="link" value="<?php echo $d['linkvideo']; ?>">
                <br>
                <br>
                <input type="submit" value="ADD">
            </form>
            <br>
            <br>
            <br>
            <?php
        }
    ?>
</body>
</html>