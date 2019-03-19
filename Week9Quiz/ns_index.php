<!DOCTYPE html>
<html>
    <body>
        <h1>My Calculator
        </h1>
        <form  
              method="POST" action='ns_calc.php'>
            <input type="radio" value= "Addition" name="calcu"> Addition .
            <br />
            <input type="radio" value= "Subtraction" name="calcu"> Subtraction .
            <br />
            <input type="radio" value= "Multiplication" name="calcu"> Multiplication .
            <br />
            <input type="radio" value= "Division" name="calcu"> Division .
            <br />
            Addition: 
            <input type="text" name="Addition">
            <br>
            Subtraction:
            <input type="text" name="Subtraction">
            <br>
            Multiplication:
            <input type="text" name="Multiplication">
            <br>
            Division:
            <input type="text" name="Division">
            <br>
            Addition:
            <input type="submit" name="Addition"  value="Addition">
        </form>
    </body>
</html>
