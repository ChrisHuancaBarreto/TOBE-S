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
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
<?php include_once("header.php"); ?>
<main>
  <div id="banner_bienvenida" class="carousel slide" data-ride="carousel" style="z-index:auto">
        <ol class="carousel-indicators" style="z-index:auto;">
          <li data-target="#banner_bienvenida" data-slide-to="0" class="active"></li>
          <li data-target="#banner_bienvenida" data-slide-to="1"></li>
          <li data-target="#banner_bienvenida" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div><img src="img/banner_2.jpg" class="d-block w-100" alt="banner_2"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner_3.jpg" class="d-block w-100" alt="banner_3"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner_4.jpg" class="d-block w-100" alt="banner_4"></div>
          </div>
          <div class="carousel-item">
            <div><img src="img/banner_5.jpg" class="d-block w-100" alt="banner_5"></div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#banner_bienvenida" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner_bienvenida" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
</main>
<?php include_once("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>