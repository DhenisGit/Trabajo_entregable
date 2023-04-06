<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/formulario.css">
	<link rel="stylesheet" href="css/ubicacion.css">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/efectos.js"></script>
	<script src="js/parallax.js"></script>

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
		<section>
			<div class="formulario"></div>
			<form>
				<fieldset>
					<legend>Envianos tu mensaje</legend>

					<label>Nombre</label>
					<input type="text" placeholder="Ej. Pepito">

					<br><br>
					<label>Email</label>
					<input type="email" placeholder="ejemplo@gmail.com">

					<br><br>

					<label>Tipo</label>
					<select>
						<option>Reclamo</option>
						<option>Queja</option>
						<option>Recomendacion</option>
					</select>

					<br><br>
					<label>Mensaje</label><br>
					<textarea rows="5" cols="70"></textarea>

					<br><br>
					<button class="participar" id="participar">Enviar</button>


				</fieldset>
			</form>
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