<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Finddle-Contacto</title>
	<link rel="shortcut icon" href="includes/img/favicon1.png" />
	<link rel="stylesheet" type="text/css" href="includes/css/style.css" />
</head>
<body>

	<div id = "centrado">
		<a href="index.html"id="logo"><img src="includes/img/l2.png"></a>
		<nav class="buttons">
			<a href="proximosEventos.html">Conciertos</a>
			<a href="cartelera.html">Cine</a>
			<a href="proximosEventos.html">Fiestas</a>
			<a href="login.html">Conéctate</a>
		</nav>
	
	<div id="formularioRegistro">
	<form class="contact_form" action="contact" method="post" id="contacto">
		<h2>Contáctanos</h2>
		<ul>
			<li>
				<label for="name">Nombre:</label> 
				<input type="text" placeholder="Su nombre" required />
			</li>
			</br>
			<li>
				<label for="email">Email:</label>
				<input type="email"	name="email" placeholder="correo@ejemplo.com" required />
			</li>
			</br>
			<li>
				<label for="website">Sitio Web:</label>
				<input type="url" name="web" placeholder="http://susitio.com" required />
			</li>
			</br>
			<li>
				<label for="Mensaje">Mensaje:</label>
				</br>
				<textarea name="Mensaje" cols="40" rows="6" required></textarea>
			</li>
			</br>

				<button class="submit" type="submit">Enviar</button>
			
		</ul>
	</form>
	</div>

</body>
</html>