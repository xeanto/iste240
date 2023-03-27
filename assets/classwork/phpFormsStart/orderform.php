<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/pizza.css" />
	<script type="text/javascript" src="assets/script/pizza.js"></script>
</head>
<body>

	<div id="wrapper">

	<h1>Eat more Pizza!</h1>
	<p><img src="assets/img/hotpizza.png"></p>
	<div id="container">
	<h2>Order a Delicious Pizza!</h2>
    
	<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
		<p>Name:  <input type="text" name="customerName" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>" /></p>
		<p>ID:  <input type="text"  name="customerID"  /></p>
		<p> Check the size of Pizza you would like to order:<br />
			<!-- Note the <label> tags below that allow the user to click on the text! -->
			<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
			<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
			<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
			<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
		</p>
		<p>Check how many extra toppings you would like:<br />
			<!-- new radio buttons for the toppings -->
			<input type="radio" name="toppings" value="zero" id="zero_topping" /><label for="zero_topping">Zero</label><br/>
			<input type="radio" name="toppings" value="one" id="one_topping" /><label for="one_topping">One</label><br/>
			<input type="radio" name="toppings" value="two" id="two_topping" /><label for="two_topping">Two</label><br/>
			<input type="radio" name="toppings" value="three" id="three_topping" /><label for="three_topping">Three</label><br/>
		</p>
		<p>
			<input type="submit"  name="Submit"  value=" Send Form"  />
		</p>
	</form>
	</div> 
	<footer>Dan's Pizza Shoppe &reg;</footer>
</body>
</html>