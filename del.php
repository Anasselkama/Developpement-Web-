<?php
$id = $_GET['idd'];

$db = new PDO("mysql:host=localhost;dbname=envir;cahset=UTF8","root","anass1998");

$sql = "DELETE FROM users WHERE id=?";

$stmt = $db->prepare($sql);

$stmt->bindValue(1,$id,PDO::PARAM_STR);

$stmt->execute();

header('location:indexx.php');

?>