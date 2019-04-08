<!--
 Created by Maria Gallardo
 @version 1.0
 Date: 2019-04-04
 URL: http://mgallardo.greenriverdev.com/328/cupcakes/

 This program displays a form  for the user to select cupcake flavors, each cupcake
 costs $3.50, after the user submits the form their selections is displayed as well as their
 total.
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

//Create an array to display menu options in checkboxes, as well as their value
$flavorsList= array('grasshopper'=>"The Grasshopper",'maple'=>"Whiskey Maple Bacon",'carrot'=>"Carrot Walnut",
    'caramel'=>"Salted Caramel Cupcake",'velvet'=>"Red Velvet", 'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu');

//check if the form has being submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $flavors = $_POST['flavors'];
}

//initialize errors array
 $errors=array();

//check if the user enter their name
if(empty($name))
{
    $errors []= "You forgot to enter your name.";
}

//prints an error is the user did not pick at least 1 flavor
if(sizeof($flavors)< 1)
{
    $errors[] = "Pick at least one flavor";
}

//display success message if there aren't any errors
if(empty($errors))
{
    $total =0;
    echo "<h2>Thank you $name, for your order!</h2>
          <h3>Order summary:</h3>
          <ul>";
    foreach($flavors as $flavor)
    {
        $total+= 3.50;
        echo "<li>$flavor</li>";
    }
    echo "</ul>
          <p>Order Total: \$$total</p>";

    exit();
}

//display any errors to the user
else
{
    foreach($errors as $errorMessage)
    {
        echo " - $errorMessage<br>\n";
    }
}

?>
    <h1>Cupcake Fundraiser</h1>
    <form action="index.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Please enter your name"
               value="<?php print $name; ?>"><br>
        <p>Cupcake flavors:</p><br><br>
        <div>
            <?php foreach($flavorsList as $flavor => $value)
            {
                echo " <input type='checkbox' name='flavors[]' value='$flavor'";
                    if (in_array($flavor, $flavors)) echo 'checked';
                    echo ">$value<br>";
            }
            ?>
        </div>
        <button type="submit" class="btn btn-success btn-block">Place Order</button>
    </form>

</body>
</html>


