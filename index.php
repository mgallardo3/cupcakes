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
<?php

$flavorsList= array('grasshopper'=>"The Grasshopper",'maple'=>"Whiskey Maple Bacon",'carrot'=>"Carrot Walnut",
    'caramel'=>"Salted Caramel Cupcake",'velvet'=>"Red Velvet", 'lemon'=>'Lemon Drop', 'tiramisu '=>'Tiramisu');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $flavors = $_POST['flavors'];
}
//initialize errors array
 $errors=array();

if(empty($name))
{
    $errors []= "You forgot to enter your name.";
}
if(sizeof($flavors)< 1)
{
    $errors[] = "Pick at least one flavor";
}
if(empty($errors))
{
    echo "You order has being placed";
}
else
{
    foreach($errors as $errorMessage)
    {
        echo " - $errorMessage<br>\n";
    }
}

?>
    <h1>Cupcake Fundraiser</h1>
    <form class="form-container" action=" " method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Please enter your name"><br>
        <label for="flavors">Cupcake flavors:</label><br><br>
        <div name="flavors">
            <?php foreach($flavorsList as $flavor => $value)
            {
                echo " <input type='checkbox' name='flavors[]' value='$flavorsList[$flavor]'>$flavorsList[$flavor]<br>";
            }
            ?>
        </div>
        <button type="submit" class="btn btn-success btn-block">Place Order</button>
    </form>

</body>
</html>


