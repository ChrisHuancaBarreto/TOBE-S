<!DOCTYPE html>
<?php 
require_once 'bd.json';
session_start();
if($_POST){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $errores=false;

    if($email==""){
        echo "El email es obligatorio";
        $errores=true;
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
          echo "No tiene estructura de correo";
    }
    
    if($password==""){
        echo "La contraseña es obligatoria";
    }else if(strlen($password)<10){
               echo "la contraseña debe tener un maximo de 10 caracteres";
    }
     if(!$errores){

        $usuariosBDJson=file_get_contents("bd.json",true);
        $usuariosPHP=json_decode($usuariosBDJson,true);

        $usuarioNuevo = [ 
            "email"=>"",
            "password"=>""
        ];

        $usuariosPHP[]=$usuarioNuevo;
        $usuariosBDJson=json_encode($usuariosPHP);

     }

     
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tobe's</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link href="css/hover.css" rel="stylesheet" media="all">
    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <div class="login">
        <img class="user-img" src="img/user.png" alt="user-img">
        <h1>Iniciar Sesion</h1>

        <form method="POST" action="login.php">
            <!-- USUARIO - CORREO -->
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="usuario@mail.com" value="<?=$email?>">

            <!-- CONTRASEÑA -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Contraseña">

            <input type="submit" value="Ingresar">

            <a href="#">Olvidé mi contraseña?</a><br>
            <a href="#">¿Aún no tenés cuenta?</a>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>