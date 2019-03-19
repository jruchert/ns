<?php
    if (isset($_POST['button1'])) {
    
    
   $my_key = $_POST['fname'];
   $my_value = $_POST['lname'];
   
   $my_array = array($my_key => $my_value);
   
   echo $my_key;
   
   var_dump($my_array);

        echo "I pressed button1";
    }
    elseif (isset($_POST['button2'])) {
        echo "I pressed button2";
    }

?>

