<?php
    $path="./";
    include($path . "assets/inc/header.php");

    $customerName = $_POST('customerName');
    $customerID = $_POST('customerID');
    $pizzaSize = $_POST('pizzaSize');

    die($customerName . " CustomerID: " . $customerID . " Size: " . $pizzaSize)
?>

SHOW PIZZA PRICE

<?php
    $path="./";
    include($path . "assets/inc/footer.php");
?>