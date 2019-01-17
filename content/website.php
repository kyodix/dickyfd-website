<div class="isiwork">
    <a href="index.php?page=my_work"><img src="img/folder design.png" alt=""></a>
    <img src="img/website icon.png" alt="">
    <h2>WEBSITE</h2>
    <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM website");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <img src="<?php echo $d['gambarwebsite']; ?>" alt="">
            <p><b>Name</b> | <?php echo $d['namawebsite']; ?></p>
            <p><b>Platform</b> | <?php echo $d['platformwebsite']; ?></p>
            <p><b>Software</b> | <?php echo $d['softwebsite']; ?></p>
            <p><b>Date</b> | <?php echo $d['datewebsite']; ?></p>
            <p><b>Category</b> | <?php echo $d['kategoriwebsite']; ?></p>
            <p><b>Link</b> | <i><u><a target="_blank" href="<?php echo $d['linkwebsite']; ?>"><?php echo $d['namawebsite']; ?></a></u></i></p>
        <?php
        }
    ?>
</div>