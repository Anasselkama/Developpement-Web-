<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<div class="error">
    <?php
    session_start();
    if(!isset($_SESSION['error']))
        echo "<h2>" .$_SESSION['error']."<h2>";
    ?>
</div>
<form action="auth.php">
    <input type="text" name="login">
    <input type="password" name="pass">
    <button>Envoyer</button>
</form>
</body>
</html>