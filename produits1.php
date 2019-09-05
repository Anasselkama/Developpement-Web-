<?php
 
    try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
 
 //  sinon on continue
// On récupère la table des produits //
$reponse = $bdd->query('SELECT * FROM produits');
$arr = array();
while ($es = $reponse->fetch()) {
    array_push($arr,$es);
}
 
?>