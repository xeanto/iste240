<nav class="nav-container">
    <div class="nav-item">
        <a class="nav-button" href="<?php echo $webroot . 'index.php' ?>">Home</a>
    </div>
    <?php
    $blacklist = array('.', '..');
    // title variable assignment regex
    $pattern = '/\$title\s*=\s*[\'"](.+?)[\'"]/';
    // loop through each directory in the content folder
    foreach (glob($contentroot . '*', GLOB_ONLYDIR) as $dir) {
        $dir = basename($dir);
        // open divs and set name of nav-item
        echo '<div class="nav-item">
            <a class="nav-button">' . ucfirst(strtolower($dir)) . '</a>
            <div class="nav-content">';
        // loop through all directories in $dir
        foreach (glob($contentroot . $dir . '/*', GLOB_ONLYDIR) as $subdir) {
            $subdir = basename($subdir);
            // get contents of index.phps
            $contents = file_get_contents($contentroot . $dir . '/' . $subdir . '/index.php');
            // get title from index.php
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