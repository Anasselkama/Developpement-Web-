<?php
if(isset($_COOKIE['compteur']))
   $c = $_COOKIE['compteur']+1;
else
   $c = 1;

setcookie('compteur',$c,time()+60*60*24*24);

echo "<h2>Nombre de vsites : $c</h2>";

var_dump($_COOKIE);

?>
     