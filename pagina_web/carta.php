<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"    
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="    
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/carta.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/ubicacion.css">

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/efectos.js"></script>
  <script src="js/parallax.js"></script>
  <script src="js/app.js"></script>

  <title>Café FalconMasters</title>

</head>

<style>
  header {
    width: 100%;
    /* background-image: url('../img/bg.png'); */
    background-image: url('/trabajo_final/img/bg.png');
    /* Ruta de la imagen de fondo */
    background-size: cover;
    background-attachment: fixed;
    background-position: center 0;
  }
</style>

<body>
  <header>
    <div class="contenedor">
      <nav class="menu">
        <a href="/trabajo_final/pagina_web/inicio.php">Inicio</a>
        <a href="/trabajo_final/pagina_web/carta.php">Carta</a>
        <a href="/trabajo_final/pagina_web/formulario.php">Contacto</a>
        <a href="/trabajo_final/login/IniciarSesion.php">Iniciar sesion</a>
      </nav>

      <div class="textos">
        <h1 class="nombre">Restaurante<span> Leña y Carbón</span></h1>
        <h3>Barriga llena corazón contento.</h3>
      </div>
    </div>
  </header><!-- /header -->

  <section class="main">
    <section class="contenedor">
      <div class="contenedor-items">

        <div class="item">
          <span class="titulo-item">1 Pollo a la brasa entero</span>
          <img src="/trabajo_final/img/pollo.png" alt="" class="img-item">
          <span class="precio-item">S/. 64.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">1/2 Pollo a la brasa</span>
          <img src="/trabajo_final/img/medio_pollo.png" alt="" class="img-item">
          <span class="precio-item">S/. 30.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">1/4 Pollo a la brasa</span>
          <img src="/trabajo_final/img/cuarto.png" alt="" class="img-item">
          <span class="precio-item">S/. 15.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">1/8 Pollo a la brasa</span>
          <img src="/trabajo_final/img/octavo_pollo.png" alt="" class="img-item">
          <span class="precio-item">S/. 10.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">Anticuchos</span>
          <img src="/trabajo_final/img/anticucho.png" alt="" class="img-item">
          <span class="precio-item">S/. 20.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">Aji de gallina</span>
          <img src="/trabajo_final/img/aji_de_gallina.png" alt="" class="img-item">
          <span class="precio-item">S/. 18.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">Lomo saltado</span>
          <img src="/trabajo_final/img/lomo_saltado.png" alt="" class="img-item">
          <span class="precio-item">S/. 22.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">Sopa criolla</span>
          <img src="/trabajo_final/img/sopa_criolla.png" alt="" class="img-item">
          <span class="precio-item">S/. 12.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
        <div class="item">
          <span class="titulo-item">Causa rellena</span>
          <img src="/trabajo_final/img/causa_rellena.png" alt="" class="img-item">
          <span class="precio-item">S/. 25.00</span>
          <button class="boton-item">Agregar al Carrito</button>
        </div>
      </div>
      <!-- Carrito de Compras -->
      <div class="carrito" id="carrito">
        <div class="header-carrito">
          <h2>Tu Carrito</h2>
        </div>

        <div class="carrito-items">

        </div>
        <div class="carrito-total">
          <div class="fila">
            <strong>Tu Total</strong>
            <span class="carrito-precio-total">

            </span>
          </div>
          <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
        </div>
      </div>
    </section>

    <section class="ubicacion">
      <div class="contenedor">
        <h3 class="titulo">Ubicación</h3>
        <div class="direccion">
          <p class="calle">Jr. 03 Febrero 1091 <br> La Victoria, 15058</p><br>
          <p class="telefono">(01) 713-0606</p>
          <p class="correo">leñaycarbon@mail.com</p>
        </div>

        <div class="horarios">
          <h4>Horarios</h4>
          <p class="entre-semana">Lunes a Viernes <br> 03:00pm - 11:00pm</p>
          <p class="fin-semana">Sabados y Domingos <br> 01:00pm - 12:00pm</p>
        </div>
      </div>
    </section>

  </section>

  <footer>
    <div class="contenedor">
      <div class="copyright">
        <p>Copyright Trabajo Final @ 2023</p>
      </div>
    </div>
  </footer>

</body>

</html>