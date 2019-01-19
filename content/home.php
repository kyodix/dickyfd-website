<div class="isihome">
    <h1>HOME</h1>
    <img src="img/logo dickyfd.png" alt="">
    <p>the place where i can put all my work in this website like video editing, design, website, application & game developing, etc. for more information go to <a href="index.php?page=about">About Page</a>, to see what i've done, go to <a href="index.php?page=my_work">My Work Page</a>,if there's any question, feel free to ask on <a href="index.php?page=find_me">Find Me Page</a>, Thank you for Visiting my Website ^_^</p>
    <h1>HEADLINE</h1>
    <?php
        include 'koneksi.php';

        if(isset($_GET['halaman'])) {
            $halaman = $_GET['halaman'];
        } else {
            $halaman = 1;
        }

        if($halaman == '' || $halaman == 1) {
            $halaman1 = 0;
        } else {
            $halaman1 = ($halaman*5)-5;
        }

        $sql = 'SELECT * FROM headline ORDER BY ID ASC LIMIT '.$halaman1.', 5';
        $data = $koneksi->query($sql);

        // print_r($data->fetch_all());
        while($row = $data->fetch_assoc()) {
            echo '<img src="'.$row['gambarheadline'].'">';
            echo '<p><b>Name</b> | '.$row['namaheadline'].'</p>';
            echo '<p><b>Platform</b> | '.$row['platformheadline'].'</p>';
            echo '<p><b>Software</b> | '.$row['softheadline'].'</p>';
            echo '<p><b>Date</b> | '.$row['dateheadline'].'</p>';
            echo '<p><b>Category</b> | '.$row['kategoriheadline'].'</p>';
            echo '<p><b>Link</b> | <i><u><a target="_blank" href="'.$row['linkheadline'].'">'.$row['namaheadline'].'</a></u></i></p>';
        }

        //pagination
        $sql = 'SELECT * FROM headline';
        $data = $koneksi->query($sql);
        $records = $data->num_rows;
        $records_halamans = $records/5;
        $records_halamans = ceil($records_halamans);
        $prev = $halaman - 1;
        $next = $halaman + 1;

        echo '<ul class="pagination">';

        if($halaman >= 5) {
            echo '<li><a href="?halaman=1">First</a></li>';
        }

        if ($prev >= 1) {
            echo '<li><a href="?halaman='.$prev.'">Prev</a></li>';
        }

        if($records_halamans >= 2) {
            for($r=1; $r <= $records_halamans; $r++) {
                $active = $r == $halaman ? 'class="active"' : '';
                echo '<li><a href="?halaman='.$r.'" '.$active.'>'.$r.'</a></li>';
            }
        }

        if ($next <= $records_halamans && $records_halamans >= 2) {
            echo '<li><a href="?halaman='.$next.'">Next</a></li>';
        }
        if($halaman != $records_halamans && $records_halamans >=5) {
            echo '<li><a href="?halaman='.$records_halamans.'">Last</a></li>';
        }

        echo '</ul>';
    ?>
</div>