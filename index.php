<?php
//<!--
//Rajpreet Dhaliwal
//Assignment: Cupcake
//Url: https://github.com/rdhaliwal6/cupcake
//-->
$flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut", "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop",
    "tiramisu"=>"Tiramisu");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap & Pizza CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
       <title>Cupcake Fundraiser</title>
</head>
<body>
    <div class="container" id="main">
        <form id="cupcake-form" action="confirmation.php" method="post">
        <h1>Cupcake Fundraiser</h1>
            <div class="form-group">
                <label for="name">Your Name:</label><br>
                <input type="text" class="form-control" id="name" name="name"
                   placeholder="Please input your name.">
                <span class="err" id="err-name">
                        Please enter a Name
                </span>
            </div>

        <fieldset class="form-group">
            <label>Cupcake flavors:</label><br>
                <?php
                foreach($flavors as $value){
                    echo "<input class=\"form-check-input\" type = 'checkbox' name='flavors[] value = '$value'>";
                    echo "<label class=\"form-check-label\" for='$value'> $value </label><br>";
                }
                ?>
                <span class="err" id="err-flavors">
                Please enter a Name
                 </span>
        </fieldset>

        <button id="submit" type="submit" class="btn btn-primary">
            Order
        </button>
    </form>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
