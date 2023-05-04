<?php
//define reusable variables
$root = '/home/MAIN/cam8940/Sites/iste240/final/';
$webroot = '/~cam8940/iste240/final/';
$contentroot = $root . 'content/';
$sitetitle = ' - Pittsburgh, Pennsylvania';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo $webroot ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title . $sitetitle ?>
    </title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/scripts.js"></script>
</head>

<body>
    <script>
    document.body.className = "hidden"
    </script>
    <?php
    // include the nav on each page
    include 'nav.php' ?>