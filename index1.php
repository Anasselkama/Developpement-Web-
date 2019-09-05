<?php
   
   $db = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', 'anass1998');

   $sql = "SELECT * FROM produits";
   
   $stmt = $db->query($sql);

   $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Tableau Produits</title>
</head>
<body>
    <h1>Tableau des produits</h1>
    <form action="add.php">
        type : <input type="text" name="type" placeholder="type"><br>
        reference : <input type="text" name="reference" placeholder="reference"><br>
        designation : <input type="text" name="designation" placeholder="designation"><br>
        prixNormal : <input type="text" name="prixNormal" placeholder="prixNormal"><br>
        prixPromo : <input type="text" name="prixPromo" placeholder="prixPromo"><br>
        photo : <input type="file" name="photo" placeholder="photo"><br>
        <button>Envoyer</button><br>
    </form>
    <table border="1" width="100%" cellpadding="6">
    <tr>
        <th>type</th>
        <th>reference</th>
        <th>designation</th>
        <th>prixNormal</th>
        <th>prixPromo</th>
        <th>photo</th>
    </tr>
    <?php foreach($rows as $row): ?>
     <tr>
         <td><?= $row['type'] ?></td>
         <td><?= $row['reference'] ?></td>
         <td><?= $row['designation'] ?></td>
         <td><?= $row['prixNormal'] ?></td>
         <td><?= $row['prixPromo'] ?></td>
         <td><?= $row['photo'] ?></td>
         <td><a href="del.php?typ=<?= $row['type'] ?>">Supprimer</a></td>
         <td><a href="update.php?typ=<?= $row['type'] ?>">Modifier</a></td>
     </tr>
    <?php endforeach; ?>
    </table>
    <div class="container" id="panier">
            <div class="display-4 text-primary m-4">
               Produits acheter 
            </div>
            <div class="card">
                <div class="card-header bg-dark text-white h4">Panier</div>
                <div class="card-body">
                    <?php require_once "panier.php"; ?>
                </div>
            </div>
        </div>


        
</body>
</html>