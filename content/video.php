<div class="isiwork">
    <a href="index.php?page=my_work"><img src="img/folder design.png" alt=""></a>
    <img src="img/video icon.png" alt="">
    <h2>VIDEO</h2>
    <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM video");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <div class="videoWrapper">
                <iframe width="560" height="315" src="<?php echo $d['gambarvideo']; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <p><b>Name</b> | <?php echo $d['namavideo']; ?></p>
            <p><b>Platform</b> | <?php echo $d['platformvideo']; ?></p>
            <p><b>Software</b> | <?php echo $d['softvideo']; ?></p>
            <p><b>Date</b> | <?php echo $d['datevideo']; ?></p>
            <p><b>Category</b> | <?php echo $d['kategorivideo']; ?></p>
            <p><b>Link</b> | <i><u><a target="_blank" href="<?php echo $d['linkvideo']; ?>"><?php echo $d['namavideo']; ?></a></u></i></p>
        <?php
        }
    ?>
    
    
</div>