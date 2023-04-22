<nav class="nav-container">
    <div class="nav-item">
        <a class="nav-button" href="<?php echo $root . 'index.php' ?>">Home</a>
    </div>
    <div class="nav-item">
        <a class="nav-button">History</a>
        <div class="nav-content">
            <a href="<?php echo $root ?>pages/pgh_first.html">Pittsburgh's Firsts</a>
            <a href="<?php echo $root ?>pages/pgh_people.html">Notable People</a>
            <a href="<?php echo $root ?>pages/pgh_inner.html">The Inner City</a>
            <a href="<?php echo $root ?>pages/pgh_outer.html">A Pittsburgh Education</a>
            <a href="<?php echo $root ?>pages/pgh_bridges.html">Our Bridges</a>
        </div>
    </div>
    <div class="nav-item">
        <?php
        $directory = opendir('/home/MAIN/cam8940/Sites/iste240/final/pages');
        while (false !== ($file = readdir($directory))) {
            echo $file;
        }
        closedir($directory);
        ?>
    </div>
</nav>