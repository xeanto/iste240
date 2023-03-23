<?php
    $path="./";
    include($path . "assets/inc/header.php");

    $customerName = $_POST['customerName'];
    $customerID = $_POST['customerID'];
    $pizzaSize = $_POST['pizzaSize'];

    //die($customerName . " CustomerID" . $customerID . " Size: " . $pizzaSize);
    if(empty($customerID)){

        // echo "You must provide an ID press back";
        header("Location: orderform.php");
    }else{
        if(!is_numeric($customerID)){

            echo "Customer ID: ". $customerID . " is not a valid ID because it contains non-numeric characters.";
        }else{
            switch($pizzaSize){
                case 'P':
                    //personal pizza
                    $pizzacost = 7.99;
                    $pizzaType = "Personal";
                    break;
                case 's':
                    //small pizza
                    $pizzacost = 10.99;
                    $pizzaType = "Small";
                    break;
                case 'm':
                    //medium pizza
                    $pizzacost = 13.99;
                    $pizzaType = "Medium";
                    break;
                case 'l':
                    //large pizza
                    $pizzacost = 16.99;
                    $pizzaType = "Large";
                    break;
                default:
                    $pizzaCost = 13.99;
                    $pizzaType = "Medium";
            }
            // echo $pizzaType . " " . $pizzaCost;
            $taxAmount = $pizzaCost * 0.08;
            $totalCost = $taxAmount + $pizzaCost;

            $fmt = numfmt_create('en_US',NumberFormatteR::CURRENCY);
            $taxAmount = numfmt_format_currency($fmt, $taxAmount, 'USD');
            $totalCost = numfmt_format_currency($fmt, $totalCost, 'USD');

            echo $taxAmount.'<br>';
            echo $totalCost.'<br>';
        }
    }

?>

SHOW PIZZA PRICE

<?php
    $path="./";
    include($path . "assets/inc/footer.php");
?>