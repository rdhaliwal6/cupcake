<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcake Fundraiser</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <div class="form-group">
        <label for="name">Your Name:</label><br>
    <input type="text" class="form-control" id="name" >
    <span class="err" id="name">
                Please enter a Name
    </span>
    </div>

    <form id="cupcake-form" action="confirmation.php" method="post">
        <button id="submit" type="submit" class="btn btn-primary">
            Submit your order
        </button>
    </form>
</body>
</html>
