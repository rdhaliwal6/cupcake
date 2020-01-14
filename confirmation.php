<?php
//<!--
//Rajpreet Dhaliwal
//Assignment: Cupcake
//Url: https://github.com/rdhaliwal6/cupcake
//-->

$flavorsCheck = array("The Grasshopper", "Whiskey Maple Bacon",
   "Carrot Walnut", "Red Velvet", "Lemon Drop",
    "Tiramisu");

var_dump($_POST);

$isValid = true;

if(isset($_POST['name']) and !is_numeric($_POST['name'])){
    $name = $_POST['name'];
    $order = $_POST['flavor'];

    if($name === ""){
        echo "<p>Go back and insert a name for the order.</p>";
        $isValid = false;
    }
    if(!isset($_POST['flavor'])){
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
