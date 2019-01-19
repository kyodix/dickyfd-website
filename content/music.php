<div class="isiwork">
    <a href="index.php?page=my_work"><img src="img/folder design.png" alt=""></a>
    <img src="img/music icon.png" alt="">
    <h2>MUSIC</h2>
    
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

        $sql = 'SELECT * FROM music ORDER BY ID ASC LIMIT '.$halaman1.', 5';
        $data = $koneksi->query($sql);

        // print_r($data->fetch_all());
        while($row = $data->fetch_assoc()) {
            echo '<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="'.$row['gambarmusic'].'"></iframe>';
            echo '<p><b>Name</b> | '.$row['namamusic'].'</p>';
            echo '<p><b>Platform</b> | '.$row['platformmusic'].'</p>';
            echo '<p><b>Software</b> | '.$row['softmusic'].'</p>';
            echo '<p><b>Date</b> | '.$row['datemusic'].'</p>';
            echo '<p><b>Category</b> | '.$row['kategorimusic'].'</p>';
            echo '<p><b>Link</b> | <i><u><a target="_blank" href="'.$row['linkmusic'].'">'.$row['namamusic'].'</a></u></i></p>';
        }

        //pagination
        $sql = 'SELECT * FROM music';
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