<div class="isiwork">
    <a href="index.php?page=my_work"><img src="img/folder design.png" alt=""></a>
    <img src="img/application icon.png" alt="">
    <h2>APPLICATION</h2>
    <?php
        include 'koneksi.php';

        if(isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }

        if($page == '' || $page == 1) {
            $page1 = 0;
        } else {
            $page1 = ($page*5)-5;
        }

        $sql = 'SELECT * FROM APPLICATION ORDER BY ID ASC LIMIT '.$page1.', 5';
        $data = $koneksi->query($sql);

        // print_r($data->fetch_all());
        while($row = $data->fetch_assoc()) {
            echo '<img src="'.$row['gambarapplication'].'">';
            echo '<p> Name |'.$row['namaapplication'].'</p>';
            echo '<p> Platform |'.$row['platformapplication'].'</p>';
            echo '<p> Software |'.$row['softapplication'].'</p>';
            echo '<p> Date |'.$row['dateapplication'].'</p>';
            echo '<p> Category |'.$row['kategoriapplication'].'</p>';
            echo '<p> Link |'.$row['linkapplication'].'</p>';
        }

        //pagination
        $sql = 'SELECT * FROM application';
        $data = $koneksi->query($sql);
        $records = $data->num_rows;
        $records_pages = $records/5;
        $records_pages = ceil($records_pages);
        $prev = $page - 1;
        $next = $page + 1;

        echo '<ul class="pagination">';

        if($page >= 5) {
            echo '<li><a href="?page=1">First</a></li>';
        }

        if ($prev >= 1) {
            echo '<li><a href="?page='.$prev.'">Prev</a></li>';
        }

        if($records_pages >= 2) {
            for($r=1; $r <= $records_pages; $r++) {
                $active = $r == $page ? 'class="active"' : '';
                echo '<li><a href="?page='.$r.'" '.$active.'>'.$r.'</a></li>';
            }
        }

        if ($next <= $records_pages && $records_pages >= 2) {
            echo '<li><a href="?page='.$next.'">Next</a></li>';
        }
        if($page != $records_pages && $records_pages >=5) {
            echo '<li><a href="?page='.$records_pages.'">Last</a></li>';
        }

        echo '</ul>';
    ?>
</div>