<header class="header navbar sticky-top">
<div class="logo">
        <a class="hvr-wobble-to-bottom-right" href="index.php"><h1>MeXus</h1></a>
</div>  
    
<div class="buscador">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button id="boton-buscador" class="btn btn-outline my-2 my-sm-0 hvr-grow-shadow" type="submit"><i class="fas fa-search"></i></button>
        </form>
</div>

<!--- buscar tablet-celular -->
<button id="buscador_mobil" class="btn btn-outline my-2 my-sm-0 hvr-grow-shadow" data-toggle="modal" data-target="#buscador" type="submit"><i class="fas fa-search" style="color:white;font-size=20px"></i></button>

<!-- Modal -->
<div class="modal fade" id="buscador" tabindex="-1" role="dialog" aria-labelledby="buscar" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text bg-transparent border-right-0">
                  <i class="fa fa-search"></i>
                </div>
              </span>
              <input class="form-control py-2 border-left-0 border" type="buscar" placeholder="Buscar productos..." id="buscador" />
              <span class="input-group-append">
                <button class="btn btn-outline-secondary border-left-0 border" type="button">
                 Buscar
                </button>
              </span>
            </div> 
        </div>
      </div>
    </div>
</div>
    
    
 <!--- buscar tablet-celular -->

<div class="dropdown" id="sesion">
            <button class="dropdown-toggle ingresar hvr-bounce-in boton"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h5><i class="fas fa-user"></i> Acceder</h5>
            </button>
            <div class="dropdown-menu" style="background: black;z-index: auto;" aria-labelledby="dropdownMenuButton" >
              <a class="dropdown-item" style="color:white; background: transparent;" href="register.php">Registrarse</a>
              <a class="dropdown-item" style="color:white; background: transparent;" href="login.php">Iniciar Sesion</a>
            </div>
</div>


    <!-- LOGIN - MODAL -->

    <div class="modal fade" tabindex="-1" role="dialog" id="login" aria-labelledby="login">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="color:black">Iniciar Sesion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
            <form>
            <div class="form-group">
              <label for="email">Ingrese su correo</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su email..">
            </div>
            <div class="form-group">
              <label for="pass">Contraseña</label>
              <input type="password" class="form-control" id="pass" placeholder="contraseña..">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="recordar">
              <label class="form-check-label" for="recordar">Recordar</label>
            </div>
          </form>
                </div>
                <div class="modal-footer">
                  <a href="Login/index.html"><button type="submit" class="btn btn-success">Registrarse</button></a>
                  <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>
              </div>
            </div>
    </div>

    <!-- LOGIN - MODAL -->



    <div class="redes">
      <a href="#"><i class="fab fa-facebook hvr-float"></i></a>
      <a href="#"><i class="fab fa-twitter hvr-float"></i></a>
      <a href="#"><i class="fab fa-instagram hvr-float"></i></a>
      <div style="color: white;font-size: 28px;">|</div>
      <a href="#"><i class="fa fa-shopping-cart hvr-float data-toggle="tooltip" data-placement="left" title="Debe iniciar sesion"></i></a>
    </div>
</header>
<nav id="nav-cel" class="navbar navbar-expand-lg p-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#categorias" aria-controls="categorias" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars" style="color: white;"></i>
    </button>

    <div class="collapse navbar-collapse" id="categorias">

      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a href="index.html" class="hvr-float nav-link"><i class="fa fa-home hvr-icon"></i> Home</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.html#Computadoras"><i class="fas fa-desktop"></i> Computadoras</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.html#Consolas"><i class="fas fa-gamepad"></i> Consolas</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.html#Televisores"><i class="fas fa-tv"></i> televisores</a>
        </li>
        <li class="nav-item active">
            <a class="hvr-float nav-link" href="productos.html#Celulares"><i class="fas fa-mobile-alt"></i> Celulares</a>
        </li>
        <li class="nav-item active">
            <a href="nosotros.html" class="hvr-float nav-link"><i class="fa fa-smile-o hvr-icon"></i> Sobre Nosotros</a>
        </li>
      </ul>
    </div>
</nav>