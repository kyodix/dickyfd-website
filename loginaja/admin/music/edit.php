<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Music</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="index.php"><button>Back to Administration MUSIC</button></a>
    <h3>EDIT DATA MUSIC</h3>
    <?php
        include '../../../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM music WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <p>NAME</p>
                <input type="text" name="nama" value="<?php echo $d['namamusic']; ?>">
                <p>PLATFORM</p>
                <input type="text" name="platform" value="<?php echo $d['platformmusic']; ?>">
                <p>IMAGE URL</p>
                <input type="text" name="gambar" value="<?php echo $d['gambarmusic']; ?>">
                <p>SOFTWARE</p>
                <input type="text" name="software" value="<?php echo $d['softmusic']; ?>">
                <p>DATE</p>
                <input type="text" name="date" value="<?php echo $d['datemusic']; ?>">
                <p>CATEGORY</p>
                <input type="text" name="kategori" value="<?php echo $d['kategorimusic']; ?>">
                <p>LINK</p>
                <input type="teks" name="link" value="<?php echo $d['linkmusic']; ?>">
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