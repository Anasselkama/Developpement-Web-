<?php
$n = $_GET['nom'];
$e = $_GET['email'];

$db = new PDO("mysql:host=localhost;dbname=envir;cahset=UTF8","root","anass1998");

$sql = "INSERT INTO users VALUES('',?,?)";

$stmt = $db->prepare($sql);

$stmt->bindValue(1,$n,PDO::PARAM_STR);
$stmt->bindValue(2,$e,PDO::PARAM_STR);

$stmt->execute();

header('location:indexx.php');

?>