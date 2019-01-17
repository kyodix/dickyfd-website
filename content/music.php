<div class="isiwork">
    <a href="index.php?page=my_work"><img src="img/folder design.png" alt=""></a>
    <img src="img/music icon.png" alt="">
    <h2>MUSIC</h2>
    
    <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM music");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $d['gambarmusic']; ?>"></iframe>
            <p><b>Name</b> | <?php echo $d['namamusic']; ?></p>
            <p><b>Platform</b> | <?php echo $d['platformmusic']; ?></p>
            <p><b>Software</b> | <?php echo $d['softmusic']; ?></p>
            <p><b>Date</b> | <?php echo $d['datemusic']; ?></p>
            <p><b>Category</b> | <?php echo $d['kategorimusic']; ?></p>
            <p><b>Link</b> | <i><u><a target="_blank" href="<?php echo $d['linkmusic']; ?>"><?php echo $d['namamusic']; ?></a></u></i></p>
        <?php
        }
    ?>
</div>