<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Skill</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="headline.php"><button>Back to Administration HEADLINE</button></a>
    <h3>EDIT DATA HEADLINE</h3>
    <?php
        include '../../../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM headline WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="updateheadline.php">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <p>NAME</p>
                <input type="text" name="nama" value="<?php echo $d['namaheadline']; ?>">
                <p>PLATFORM</p>
                <input type="text" name="platform" value="<?php echo $d['platformheadline']; ?>">
                <p>IMAGE URL</p>
                <input type="text" name="gambar" value="<?php echo $d['gambarheadline']; ?>">
                <p>SOFTWARE</p>
                <input type="text" name="software" value="<?php echo $d['softheadline']; ?>">
                <p>DATE</p>
                <input type="text" name="date" value="<?php echo $d['dateheadline']; ?>">
                <p>CATEGORY</p>
                <input type="text" name="kategori" value="<?php echo $d['kategoriheadline']; ?>">
                <p>LINK</p>
                <input type="teks" name="link" value="<?php echo $d['linkheadline']; ?>">
                <br>
                <br>
                <input type="submit" value="ADD">
            </form>
            <?php
        }
    ?>
</body>
</html>