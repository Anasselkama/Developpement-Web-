<?php
session_start();
$l = $_GET['login'];
$p = $_GET['pass'];

if($l == 'toto' && $p == 'toto'){
    $_SESSION['auth'] = $l;
    unset($_SESSION['error']);
    header('location:'.$_SESSION['page']);
}
else{
    $_SESSION['error'] = 'login ou mot de passe est incorrecte';
    header('location:form.html');
}
?>