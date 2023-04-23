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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title . $sitetitle ?>
    </title>
    <!-- <script src=""></script> -->
    <link rel="stylesheet" href="<?php echo $webroot . 'assets/css/styles.css' ?>">
</head>

<body>
    <?php
    // include the nav on each page
    include 'nav.php' ?>