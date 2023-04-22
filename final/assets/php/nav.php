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
        // figure out if dir is in loaded page
        if (strpos($_SERVER['REQUEST_URI'], $dir) !== false) {
            $active = 'active-nav';
        } else {
            $active = '';
        }
        // open divs and set name of nav-item
        echo '<div class="nav-item">
            <a class="nav-button ' . $active . '">' . ucfirst(strtolower($dir)) . '</a>
            <div class="nav-content">';
        // loop through all directories in $dir
        foreach (glob($contentroot . $dir . '/*', GLOB_ONLYDIR) as $subdir) {
            $subdir = basename($subdir);
            // figure out which page to highlight
            if (strpos($_SERVER['REQUEST_URI'], $subdir) !== false) {
                $activesub = 'active-nav';
            } else {
                $activesub = '';
            }
            // get contents of index.phps
            $contents = file_get_contents($contentroot . $dir . '/' . $subdir . '/index.php');
            // get title from index.php
            if (preg_match($pattern, $contents, $matches)) {
                $pagetitle = $matches[1];
                $pagepath = $webroot . 'content/' . $dir . '/' . $subdir;
                echo '<a class="' . $activesub . '" href="' . $pagepath . '">' . $pagetitle . '</a>';
            }
        }
        // close divs
        echo '</div>
            </div>';
    }
    ?>
</nav>