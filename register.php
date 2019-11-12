<?php
//inicializo variables para errores
//como los voy a mostrar en pantalla, NECESITAN EXISTIR
$errorNombre = "";
$errorEmail = "";
$errorPassword = "";
$errorAvatar = "";

//averiguo si enviaron el formulario
if($_POST){
    //creo una variable para saber si hay errores o no
    $errores = false;

    //valido los datos
    if($_POST["username"] == ""){
        $errorNombre = "Ingrese un nombre";
        $errores = true;
    }else if(strlen($_POST["username"]) < 2){
        $errorNombre = "Su nombre debe tener al menos 2 caracteres";
        $errores = true;
    }

    if($_POST["password"] == "" || $_POST["password_confirmation"] == ""){
        $errorPassword = "No puede estar en blanco";
        $errores = true;
    }else if($_POST["password"] != $_POST["password_confirmation"]){
        $errorPassword = "Las contraseñas deben coincidir";
        $errores = true;
    }else{
        $contrasenia = password_hash($_POST["password"],PASSWORD_DEFAULT);
        //echo md5($_POST["password"]);
    }

    if(!$errores){
        //no hay errores

        //creo el usuario
        $usuario = [
            "id"=> md5($_POST["username"]),
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $contrasenia
        ];

        //traigo los usuarios del json
        $usuariosEnJSON = file_get_contents("usuarios.json");
        //convierto el json en array
        $usuarios = json_decode($usuariosEnJSON);
        //agrego el nuevo usuario al array de la base de datos
        $usuarios[] = $usuario;
        //convierto el nuevo array completo a json
        $nuevosUsuariosEnJSON = json_encode($usuarios);
        //escribo el nuevo json en el archivo .json
        file_put_contents("usuarios.json",$nuevosUsuariosEnJSON);

        echo "se registro";
        exit;

        //$usuarioEnJSON = json_encode($usuario);
        //file_put_contents("usuarios.json",$usuarioEnJSON.PHP_EOL,FILE_APPEND);
        //var_dump($usuarioEnJSON);

        //redirijo a la bienvenida
    }

}

?>

<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/styles1.css">
</head>

<body>
    <div class="register">
        <h1>Registrarme</h1>
        <form method="POST" action="" enctype="multipart/form-data">
            <!-- NOMBRE DE USUARIO -->
            <label for="username">Ingrese un nombre de usuario</label>
            <input type="text" name="username" id="username"  placeholder="username">
            <!-- CORREO -->
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="usuario@mail.com" >
            <!-- CONTRASEÑA -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" placeholder="Contraseña">
            <!-- REPITA-CONTRASEÑA -->
            <label for="password_confirmation">Repetí la Contraseña</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ingrese nuevamente la Contraseña">
            <!-- Avatar -->
            <label for="file">Subí un avatar</label>
            <input type="file" name="avatar" id="avatar" placeholder="Ingrese su avatar">

            <input type="submit" value="Registrarme">

            <a href="index.php">Volver al Inicio</a>

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