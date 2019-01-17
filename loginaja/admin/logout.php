<?php
    //mengaktifkan session
    session_start();

    //menghapus semuas session
    session_destroy();

    //mengalihkan halaman sambil mengirim pesan logout
    header("location:../index.php?pesan=logout");
?>