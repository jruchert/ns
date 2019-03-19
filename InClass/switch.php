<?php
$berries = filter_input(INPUT_POST, 'berries');
$sandwich = filter_input(INPUT_POST, 'sandwich');
$wings = filter_input(INPUT_POST, 'wings');
switch ($berries) {
    case "Raspberries":
        echo "Your favorite berry is raspberry!";
        break;
    case "Acai berries":
        echo "Your favorite berry is Acai-berry!";
        break;
    case "Blueberries":
        echo "Your favorite berry is Blueberries!";
        break;
    default:
        echo "You don't even like berries!";
}
/** default or case **/ 
switch ($sandwich)
{
    case 1:
        echo "steak";
        break;
    case 2:
        echo "chicken";
        break;
    case 3:
        echo "vegan";
        break;
    default:
        echo "vegetarian";
}
echo"<br>";
switch($wings)
{
    case 'spicy';
    case 'sweet';
    case 'pp&j';
        echo 'Good choice';
        break;
    default;
        echo 'Please make a new selection...';
        break;
}
?>
