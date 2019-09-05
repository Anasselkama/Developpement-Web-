<?php
 	try
{
	   // Connexion à MySQL //
	$bdd = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', 'anass1998');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message //
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM produits');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .text{
     text-align : center;
   }
  </style>
</head>
<body style="color : black;background-repeat:no-repeat;font-weight:bold;font-size:15px;">
<div class="text">
    <p><h1>Tableaux des produits</h1></p>
</div>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>type</th>
        <th>reference</th>
        <th>designation</th>
		<th>prixNormal</th>
        <th>photo</th>
        
		
      </tr>
    </thead>
    <tbody>
      
     <?php while ($es = $reponse->fetch()) {  ?>
	<tr> 
				<td>   <?php echo $es['type']  ?> </td>
				<td>   <?php echo $es['reference']  ?> </td>
                <td>   <?php echo $es['designation']  ?> </td>
                <td>   <?php echo $es['prixNormal']  ?> </td>
                <td>   <?php echo $es['prixPromo']  ?> </td>
                <td>   <?php echo $es['photo']  ?> </td>			
	  <?php }  ?>
    </tbody>
  </table>
</div>
  

</body>
</html>
