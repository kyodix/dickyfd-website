<div class="isiwork">
    <a href="index.php?page=my_work"><img src="img/folder design.png" alt=""></a>
    <img src="img/design icon.png" alt="">
    <h2>DESIGN</h2>
    <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM design");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <img src="<?php echo $d['gambardesign']; ?>" alt="">
            <p><b>Name</b> | <?php echo $d['namadesign']; ?></p>
            <p><b>Platform</b> | <?php echo $d['platformdesign']; ?></p>
            <p><b>Software</b> | <?php echo $d['softdesign']; ?></p>
            <p><b>Date</b> | <?php echo $d['datedesign']; ?></p>
            <p><b>Category</b> | <?php echo $d['kategoridesign']; ?></p>
            <p><b>Link</b> | <i><u><a target="_blank" href="<?php echo $d['linkdesign']; ?>"><?php echo $d['namadesign']; ?></a></u></i></p>
        <?php
        }
    ?>
</div>