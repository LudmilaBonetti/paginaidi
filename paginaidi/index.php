<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form method="post">
        <h1> ¿Vas a comer? </h1>
        <input type="text" name="name" placeholder="Nombre">
        <input type="submit" name="register">
</form>  
<?php 
        include("registrar.php");
        ?>  
</body>
</html>