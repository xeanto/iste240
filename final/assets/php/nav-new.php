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

    <?php
    $blacklist = array('.', '..');
    $pattern = '/\$title\s*=\s*[\'"](.+?)[\'"]/';
    foreach (glob('/home/MAIN/cam8940/Sites/iste240/final/content/*', GLOB_ONLYDIR) as $dir) {
        $dir = basename($dir);
        // open divs and set name of nav-item
        echo '<div class="nav-item">
            <a class="nav-button">' . $dir . '</a>
            <div class="nav-content">';
        // get all directories in $dir
        foreach (glob('/home/MAIN/cam8940/Sites/iste240/final/content/' . $dir . '/*', GLOB_ONLYDIR) as $subdir) {
            $subdir = basename($subdir);
            // get title from index.php
            $contents = file_get_contents('/home/MAIN/cam8940/Sites/iste240/final/content/' . $dir . '/' . $subdir . '/index.php');
            $pattern = '/\$title\s*=\s*[\'"](.+?)[\'"]/';
            if (preg_match($pattern, $contents, $matches)) {
                $pagetitle = $matches[1];
                echo '<a href="content/' . $dir . '/' . $subdir . '">' . $pagetitle . '</a>';
            }
        }
        // close divs
        echo '</div>
            </div>';
    }
    ?>

    <!-- <div class="nav-item">
        <a class="nav-button">Other</a>
        <div class="nav-content">
            
            // $filedir = '/home/MAIN/cam8940/Sites/iste240/final/content/other';
            // $directory = opendir($filedir);
            // $blacklist = array('.', '..');
            // $pattern = '/\$title\s*=\s*[\'"](.+?)[\'"]/';
            // while (false !== ($file = readdir($directory))) {
            //     if (!in_array($file, $blacklist)) {
            //         $contents = file_get_contents($filedir . "/" . $file . '/index.php');
            //         if (preg_match($pattern, $contents, $matches)) {
            //             $pagetitle = $matches[1];
            //             echo '<a href="content/' . $file . '">' . $pagetitle . '</a>';
            //         }
            //     }
            // }
            // closedir($directory);
        </div>
    </div> -->
</nav>