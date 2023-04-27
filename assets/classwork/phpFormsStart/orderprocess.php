<?php
    $path="./";
    include($path . "assets/inc/header.php");

    $customerName = $_POST['customerName'];
    $customerID = $_POST['customerID'];
    $pizzaSize = $_POST['pizzaSize'];
    $toppings = $_POST['toppings'];

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
                    $pizzaCost = 7.99;
                    $pizzaType = "Personal";
                    break;
                case 'S':
                    //small pizza
                    $pizzaCost = 10.99;
                    $pizzaType = "Small";
                    break;
                case 'M':
                    //medium pizza
                    $pizzaCost = 13.99;
                    $pizzaType = "Medium";
                    break;
                case 'L':
                    //large pizza
                    $pizzaCost = 16.99;
                    $pizzaType = "Large";
                    break;
                default:
                    $pizzaCost = 13.99;
                    $pizzaType = "Medium";
            }
            switch($toppings) {
                case 'zero':
                    $toppingCost = 0;
                    break;
                case 'one':
                    $toppingCost = 1.99;
                    break;
                case 'two':
                    $toppingCost = 3.99;
                    break;
                case 'three':
                    $toppingCost = 5.99;
                    break;
                default:
                    $toppingCost = 0;
            }
            // echo $pizzaType . " " . $pizzaCost;
            // change code so that formatting happens inline, and add more text to page.
            $pizzaCost += $toppingCost;
            $taxAmount = $pizzaCost * 0.08;
            $totalCost = $taxAmount + $pizzaCost;

            $fmt = numfmt_create('en_US',NumberFormatteR::CURRENCY);
            echo 'Pizza: '.numfmt_format_currency($fmt, $pizzaCost, 'USD').'<br>';
            echo 'Toppings: '.numfmt_format_currency($fmt, $toppingCost, 'USD').'<br>';
            echo 'Tax: '.numfmt_format_currency($fmt, $taxAmount, 'USD').'<br>';
            echo 'Total: '.numfmt_format_currency($fmt, $totalCost, 'USD').'<br>';
        }
    }

?>
<?php
    $path="./";
    include($path . "assets/inc/footer.php");
?>