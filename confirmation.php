<!--
//Rajpreet Dhaliwal
//Assignment: Cupcake
//Url: https://github.com/rdhaliwal6/cupcake
//-->
<?php
//<!--
//Rajpreet Dhaliwal
//Assignment: Cupcake
//Url: https://github.com/rdhaliwal6/cupcake
//-->

$flavorsCheck = array("The Grasshopper", "Whiskey Maple Bacon",
   "Carrot Walnut", "Red Velvet", "Lemon Drop",
    "Tiramisu");

//var_dump($_POST);

    echo "<a href = index.php>Back to order page</a>";
$isValid = true;

if(isset($_POST['name']) and !is_numeric($_POST['name'])){
    $name = $_POST['name'];
    $order = $_POST['flavors'];

    if($name === ""){
        echo "<p>Go back and insert a name for the order.</p>";
        $isValid = false;
    }
    if(!isset($_POST['flavors'])){
        echo "<p>Go back and pick a flavor</p>";
        $isValid = false;
    }

    foreach ($order as $item){
        if(!in_array($item, $flavorsCheck)){
            echo "<p>The order does not match the available options</p>";
            $isValid = false;
        }
    }
}
//print_r($order);

if($isValid){
    echo "<p>Thank you, $name for your order!<br>
    Order Summary:</p><ul>";
    foreach ($order as $item){
        echo "<li>$item</li>";
    }
    echo "</ul>";
    printf("Order Total: $%1\$.2f", count($order) * 3.50);
}
