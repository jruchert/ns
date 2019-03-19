<?php
$fn = filter_input(INPUT_POST, "fn");
$ln = filter_input(INPUT_POST, "ln");
$un = filter_input(INPUT_POST, "un"); 
$pw = filter_input(INPUT_POST, "pw");
$email = filter_input(INPUT_POST, "email");
$a = filter_input(INPUT_POST, "a");
$cb1 = filter_input(INPUT_POST, "cb1");
$cb2 = filter_input(INPUT_POST, "cb2");

if($a==="s"){
$position='student';
} else if($a==="t"){
$position='teacher';
} else if($a==="c"){
$position='community';
} else {
$position='student';
}





$query = 'INSERT INTO login
(fn, ln, un, pw, email, position, email_update_cb)
VALUES
(:fn, :ln, :un, :pw, :email, :a, :cb2)';
$statement = $db->prepare($query);
$statement->bindValue(':fn', $fn);
$statement->bindValue(':ln', $ln);
$statement->bindValue(':un', $un);
$statement->bindValue(':pw', $pw);
$statement->bindValue(':email', $email);
$statement->bindValue(':a', $position);
$statement->bindValue(':cb2', $cb2);
$statement->execute();
$statement->closeCursor();