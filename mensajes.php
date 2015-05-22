<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8" />
		<title> Finddle </title>
		<link rel="stylesheet" href="includes/css/style.css" type="text/css">
		<link rel="shortcut icon" href="includes/img/favicon1.png" />
	</head>
	
	<body>
		
		<div id="vu-contenedor">
		<div id="vu-cabecera">
		<div id = "centrado">
             <a href="" id="logo"><img src="includes/img/l2.png"></a> 
        </div>
        
             <nav class="buttons">
            <a href="">Conciertos</a>
            <a href="">Cine</a>
            <a href="">Fiestas</a>
            <a href="">Salir</a>
        </nav>
		<h1>Mensajería interna </h1>
		
		<div id = "vu-barra-izquierda">
			<img src="includes/img/usuario.png" align="center">
            <a href="#" class="submit btn primary-btn">Bandeja de entrada</a>
            <a href="#" class="submit btn primary-btn">Enviados</a>
        </div>
		
		<div id="vu-barra-derecha">
			<h2> Amigos </h2></br></br>
			<p>Andrés</p> </br>
			<p>Omar</p> </br>
			<p>Francisco</p> </br>
			<p>Enrique</p> </br>
			<p>Mario</p> </br>
			<p>Víctor</p> </br>
			<p>Javier</p>
		</div>
		
		 <div id="vu-contenido">
			<form class="contact_form" action="contact" method="post" id="contacto">
				
					<div id="nombresFormulario">
					Destinatario: </br></br>
					Mensaje: </br></br>
					</div>
					</br>
					<div id="cuadrosFormularioMensaje">
						<input type="text" placeholder="Añade un destinatario" required /></br></br></br>
						<textarea name="Mensaje" cols="50" rows="10" placeholder="Escribe aquí tu mensaje" required></textarea>
					</br></br></br>
					</div>
					
						 <a href="mensajes.html" class="btn-login">Enviar</a>
						 <a href="mensajes.html" class="btn-login">Cancelar</a>
				
			</form>
        </div>
		
		</div>
	</body>

	</html>