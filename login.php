<?php
 // Si une session exist
 session_start();

 if(isset($_SESSION["pseudo"])){
     header("Location: tchat.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    <form action="functions/loginAction.php" method="post">
        <input type="text" name="pseudo" placeholder="Votre pseudo">
        <input type="submit" value="connexion">
    </form>
</body>
</html>