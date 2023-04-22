<nav class="nav-container">
    <div class="nav-item">
        <a class="nav-button" href="<?php echo $webroot . 'index.php' ?>">Home</a>
    </div>
    <?php
    $blacklist = array('.', '..');
    $pattern = '/\$title\s*=\s*[\'"](.+?)[\'"]/';
    foreach (glob('/home/MAIN/cam8940/Sites/iste240/final/content/*', GLOB_ONLYDIR) as $dir) {
        $dir = basename($dir);
        // open divs and set name of nav-item
        echo '<div class="nav-item">
            <a class="nav-button">' . ucfirst(strtolower($dir)) . '</a>
            <div class="nav-content">';
        // get all directories in $dir
        foreach (glob('/home/MAIN/cam8940/Sites/iste240/final/content/' . $dir . '/*', GLOB_ONLYDIR) as $subdir) {
            $subdir = basename($subdir);
            // get title from index.php
            $contents = file_get_contents('/home/MAIN/cam8940/Sites/iste240/final/content/' . $dir . '/' . $subdir . '/index.php');
            $pattern = '/\$title\s*=\s*[\'"](.+?)[\'"]/';
            if (preg_match($pattern, $contents, $matches)) {
                $pagetitle = $matches[1];
                echo '<a href="' . $webroot . 'content/' . $dir . '/' . $subdir . '">' . $pagetitle . '</a>';
            }
        }
        // close divs
        echo '</div>
            </div>';
    }
    ?>
</nav>