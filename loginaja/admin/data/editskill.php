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
    <a href="myskill.php"><button>Back to Administration My Skill</button></a>
    <h3>EDIT DATA MY SKILL</h3>
    <?php
        include '../../../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM myskill WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="updateskill.php">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <p>NAME</p>
                <input type="text" name="nama" value="<?php echo $d['namaskill']; ?>">
                <p>IMAGE URL</p>
                <input type="text" name="gambar" value="<?php echo $d['gambarskill']; ?>">
                <p>PERCENT</p>
                <input type="number" name="persen" value="<?php echo $d['persenskill']; ?>">
                <br>
                <br>
                <input type="submit" value="ADD">
            </form>
            <?php
        }
    ?>
</body>
</html>