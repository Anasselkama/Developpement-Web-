<?php

$i = $_GET['idd'];
$n = $_GET['nom'];
$e = $_GET['email'];

$db = new PDO("mysql:host=localhost;dbname=envir;cahset=UTF8","root","anass1998");

$sql = "UPDATE USERS SET nom=:n , email=:e WHERE id=:i";

$stmt = $db->prepare($sql);

$stmt->bindValue('n',$n,PDO::PARAM_STR);
$stmt->bindValue('e',$e,PDO::PARAM_STR);
$stmt->bindValue('i',$i,PDO::PARAM_INT);

$stmt->execute();

header('location:indexx.php');

?>