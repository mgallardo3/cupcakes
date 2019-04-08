<!--
* Created by Maria Gallardo
* @version 1.0
* Date: 2019-04-04
* file: index.php
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

ini_set('display_errors',1);
error_reporting(E_ALL);

//Create an array to display menu options in checkboxes, as well as their value
$flavorsList= array('grasshopper'=>"The Grasshopper",'maple'=>"Whiskey Maple Bacon",'carrot'=>"Carrot Walnut",
    'caramel'=>"Salted Caramel Cupcake",'velvet'=>"Red Velvet", 'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu');

//Create an array to keep track of selected flavors
$flavorsSelected= array('grasshopper'=>false,'maple'=>false,'carrot'=>false,
    'caramel'=>false,'velvet'=>false, 'lemon'=>false, 'tiramisu'=>false);

//check if the form has being submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['name'];
    $flavors = $_POST['flavors'];

    //update the boolean value in the flavors array if they were selected
    foreach($flavors as $flavor)
    {
        foreach($flavorsSelected as $singleFlavor => $value)
        {
            if($flavor == $singleFlavor)
            {
                $flavorsSelected[$singleFlavor]=true;
            }
        }
    }
}
//initialize errors array
 $errors=array();

//check if the user enter tneir name
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
    echo "Thank you $name, for your order! <br>
          <br> Order summary:<br><br>
          ";

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
    <form class="form-container" action=" " method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Please enter your name"
               value="<?php print $name; ?>"><br>
        <label for="flavors">Cupcake flavors:</label><br><br>
        <div id="flavors">
            <?php foreach($flavorsList as $flavor => $value)
            {
                echo " <input type='checkbox' name='flavors[]' value='$flavor'";
                    if ($flavorsSelected[$flavor]==true) echo 'checked';
                    echo ">$value<br>";

            }
            ?>
        </div>
        <button type="submit" class="btn btn-success btn-block">Place Order</button>
    </form>

</body>
</html>


