<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/inicio.css">
	<link rel="stylesheet" href="css/ubicacion.css">
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
		<section class="acerca-de">
			<div class="contenedor">
				<div class="foto">
					<img src="/trabajo_final/img/acerca-de.jpg" alt="">
				</div>
				<article>
					<h3>Acerca de</h3>
					<p>Apasionados en todo lo que hacemos, en Leña & Carbón venimos brindando a todos sus clientes un
						sabor inigualable en todos y cada uno de sus productos ¡Nos preocupamos por enamorarte en cada
						visita con nuestros deliciosos pollos y crocantes papas fritas!</p>
				</article>
			</div>
		</section>

		<section class="menu">
			<div class="contenedor">
				<h3 class="titulo">Menú</h3>
				<div class="contenedor-menu">
					<div class="contenedor-menu2">
						<article>
							<p class="categoria">De Comer</p>
							<div class="platillo">
								<p class="nombre">Lomo Saltado</p>
								<p class="precio">S/20</p>
								<p class="descripcion">El clásico lomo saltado preparado en casa, con la receta de
									Teresa Ocampo. ¡Queda buenazo!.</p>
							</div>
							<div class="platillo">
								<p class="nombre">Pasta al pesto</p>
								<p class="precio">s/12</p>
								<p class="descripcion">El pesto es una de las salsas más agradecidas y fáciles de
									preparar.</p>
							</div>
							<div class="platillo">
								<p class="nombre">Sopa a la minuta</p>
								<p class="precio">S/8.00</p>
								<p class="descripcion">Cuando el frío aprieta no hay nada mejor que una calentita y
									deliciosa Sopa a la Minuta.</p>
							</div>
							<div class="platillo">
								<p class="nombre">Olluquito</p>
								<p class="precio">S/15</p>
								<p class="descripcion">No existe platillo más criollo que represente a Perú como el
									Olluquito.</p>
							</div>
						</article>

						<article>
							<p class="categoria">De Tomar</p>
							<div class="platillo">
								<p class="nombre">Gaseosas</p>
								<p class="precio"></p>
								<p class="descripcion">Inca Kola - Pepsi - Coca Cola - Sprite - Fanta.</p>
							</div>
							<div class="platillo">
								<p class="nombre">Café</p>
								<p class="precio">S/10</p>
								<p class="descripcion">Espresso - Pasado - Capuccino - Flat white.</p>
							</div>
							<div class="platillo">
								<p class="nombre">Cocteles</p>
								<p class="precio">S/40.99</p>
								<p class="descripcion">Pisco sour - Negroni - Margarita - Piña Colada - Blody Mary.</p>
							</div>
							<div class="platillo">
								<p class="nombre">Infusiones</p>
								<p class="precio">S/5.0</p>
								<p class="descripcion">Té - Anis - Manzanilla - Valeriana - Té negro/rojo - Tisana.</p>
							</div>
						</article>
					</div>
				</div>
			</div>
		</section>

		<section class="galeria">
			<div class="foto">
				<img src="/trabajo_final/img/1.png" alt="">
			</div>
			<div class="foto">
				<img src="/trabajo_final/img/2.png" alt="">
			</div>
			<div class="foto">
				<img src="/trabajo_final/img/3.jpg" alt="">
			</div>
			<div class="foto">
				<img src="/trabajo_final/img/4.jpg" alt="">
			</div>
			<div class="foto">
				<img src="/trabajo_final/img/5.png" alt="">
			</div>
			<div class="foto">
				<img src="/trabajo_final/img/6.jpg" alt="">
			</div>
			<div class="foto">
				<img src="/trabajo_final/img/7.jpg" alt="">
			</div>
			<div class="foto">
				<img src="/trabajo_final/img/8.jpg" alt="">
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

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/efectos.js"></script>
	<script src="js/parallax.js"></script>

</body>

</html>