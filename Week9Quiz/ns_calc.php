<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>My Calculator
        </title>
        <label>The Answer is:
        </label>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $calcu = $_POST['calcu'];
        function calculate($n1,$n2, $calcu) 
        {
            switch($calcu)
            {
                case "Addition"; 
                    $compute = $n1 + $n2; 
                    break;
                case "Subtraction";
                    $compute = $n1 - $n2; 
                    break;
                case "Multiplication";
                    $compute = $n1 * $n2; 
                    break;
                case "Division";
                    $compute = $n1 / $n2; 
                    break;
            }
            return $compute;
        }
        echo "Answer is:" .calculate($num1,$num2, $calcu); 
        ?><br>
    </head>
</html>
