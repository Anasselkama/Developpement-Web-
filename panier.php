<?php

session_start();

$panier = $_SESSION['panier'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>
</head>
<body>
<table border="1" cellpadding="6">
<tr>
   <th>ID</th>
   <th>QTE</th>
</tr>
<?php foreach($panier as $id => $qte): ?>
<tr>
   <th><?= $id ?></th>
   <th><?= $qte ?></th>
</tr>
<?php  endforeach; ?>
</table>
</body>
</html>