<?php
   session_start();
   if(!isset($_SESSION['auth'])){
       $_SESSION['page'] = $_SERVER['REQUEST_URI'];
       header('location:form.php');
   }
?>