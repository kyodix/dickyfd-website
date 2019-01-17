<div class="isihome">
    <h1>HOME</h1>
    <img src="img/logo dickyfd.png" alt="">
    <p>the place where i can put all my work in this website like video editing, design, website, application & game developing, etc. for more information go to <a href="index.php?page=about">About Page</a>, to see what i've done, go to <a href="index.php?page=my_work">My Work Page</a>,if there's any question, feel free to ask on <a href="index.php?page=find_me">Find Me Page</a>, Thank you for Visiting my Website ^_^</p>
    <h1>HEADLINE</h1>
    <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM headline");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <img src="<?php echo $d['gambarheadline']; ?>" alt="">
            <p><b>Name</b> | <?php echo $d['namaheadline']; ?></p>
            <p><b>Platform</b> | <?php echo $d['platformheadline']; ?></p>
            <p><b>Software</b> | <?php echo $d['softheadline']; ?></p>
            <p><b>Date</b> | <?php echo $d['dateheadline']; ?></p>
            <p><b>Category</b> | <?php echo $d['kategoriheadline']; ?></p>
            <p><b>Link</b> | <a target="_blank" href="<?php echo $d['linkheadline']; ?>"><?php echo $d['namaheadline']; ?></a></p>
        <?php
        }
    ?>
</div>