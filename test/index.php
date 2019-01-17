<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test pagination</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        text-align: center;
    }
    .pagination {
        padding: 0;
        margin-top: 30px;
    }
    .pagination li {
        display:inline-block;
        margin: 0 5px;
    }
    .pagination li a {
        display:inline-block;
        padding: 8px 12px;
        border: 1px solid #eee;
    }
    .pagination li a.active {
        font-weight:bold;
        background: #f5f5f5;
    }

    </style>
</head>
<body>
    <h1>Test Pagination PHP</h1>

    <?php
        include '../koneksi.php';

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
            echo '<p>'.$row['namaapplication'].'</p>';
            echo '<p>'.$row['gambarapplication'].'</p>';
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
</body>
</html>