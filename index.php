<!--
* Created by Maria Gallardo
* @version 1.0
* Date: 2019-04-04
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>

    <h1>Cupcake Fundraiser</h1>
    <form class="form-container" action=" " method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Please enter your name"><br>
        <label for="flavors">Cupcake flavors:</label><br><br>
        <div name="flavors">
            <input type="checkbox" name="flavors[]" value="grasshopper">The Grasshopper<br>
            <input type="checkbox" name="flavors[]" value="Maple">Whiskey Maple Bacon<br>
            <input type="checkbox" name="flavors[]" value="carrot">Carrot Walnut<br>
            <input type="checkbox" name="flavors[]" value="caramel">Salted Caramel Cupcake<br>
            <input type="checkbox" name="flavors[]" value="velvet">Red Velvet<br>
            <input type="checkbox" name="flavors[]" value="lemon">Lemon Drop<br>
            <input type="checkbox" name="flavors[]" value="tiramisu">Tiramisu<br>
        </div>
        <button type="submit" class="btn btn-success btn-block">Place Order</button>
    </form>
</body>
</html>
<?php

