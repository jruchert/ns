<?php

$birthday = $_POST['birthday'];

//$birthday = new DateTime($birthday);
try {
    $birthday = new DateTime($birthday);
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}

echo $date->format('Y-m-d');
echo $birthday;
$todaysdate = date_create(date("Y-m-d"));

$diff = date_diff($birthday, $todaysdate);

echo $diff->format("%a");

?>

<!DOCTYPE html>
<html>
<head>
<title>Days Alive Since Apocalypse</title>
<link href="myStyle.css" rel="stylesheet" /> 
</head>
<body>
<p>
<?php
echo $diff;
?>
</p>
</body>
</html>