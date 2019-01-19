<div class="isibout">
    <h1>ABOUT</h1>
    <img src="img/dicky vector3.png" alt="">
    <p>A Man who live in Coast Region, interested with computer since Junior High School, start from my childhood doing my hobby like playing game that train my logic & my english ... little >_<", getting interested learning computer when i see my brother design something with photoshop (absolutely his hobby is playing game, when i was child we often playing games together).</p>
    <p>start from there, i am autodidact learning photoshop, because my brother don't want to waste his time for me T_T, but he give me an E-book and Tutorial Document that guide me to autodidact, maybe he want to me can be autodidact</p>
    <p>after that, many software i've learned from photoshop, ms office, blender, etc. ( i will mention all down below later), but, there is not problem with me, as while as i can make something from it, i will continously learning until i can make it.</p>
    <h1>MY SKILL</h1>
    <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM myskill");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <img src="<?php echo $d['gambarskill']; ?>" alt="">
            <p><?php echo $d['namaskill']; ?> | <?php echo $d['persenskill']; ?>%</p>
        <?php
        }
    ?>
</div>