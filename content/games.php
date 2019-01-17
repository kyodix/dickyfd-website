<div class="isiwork">
    <a href="index.php?page=my_work"><img src="img/folder design.png" alt=""></a>
    <img src="img/games icon.png" alt="">
    <h2>GAMES</h2>
    <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM games");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <img src="<?php echo $d['gambargames']; ?>" alt="">
            <p><b>Name</b> | <?php echo $d['namagames']; ?></p>
            <p><b>Platform</b> | <?php echo $d['platformgames']; ?></p>
            <p><b>Software</b> | <?php echo $d['softgames']; ?></p>
            <p><b>Date</b> | <?php echo $d['dategames']; ?></p>
            <p><b>Category</b> | <?php echo $d['kategorigames']; ?></p>
            <p><b>Link</b> | <i><u><a target="_blank" href="<?php echo $d['linkgames']; ?>"><?php echo $d['namagames']; ?></a></u></i></p>
        <?php
        }
    ?>
</div>