<!DOCTYPE html>
<html>

    <head>
        <title>Finddle</title>
        <meta charset="utf-8" />
        <link id="estilo" rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="includes/img/favicon1.png" />
    </head>

    <body>
       <div id = "vu-contenedor">

        <div id = "pu-cabecera">
         
			<div class = "centrado">
				<a href="index.html"id="logo"><img src="includes/img/l2.png"></a>
				<nav class="buttons">
					<a href="proximosEventos.html">Conciertos</a>
					<a href="cartelera.html">Cine</a>
					<a href="proximosEventos.html">Fiestas</a>
					<a href="index.html">Salir</a>
				</nav>
			</div>
        </div>
		
		
        <div id = "vu-barra-izquierda">
			<a href="vistapromotor.html" class="submit btn primary-btn">Administrar eventos</a>
			<a href="configurarcuenta.html" class="submit btn primary-btn">Configurar cuenta</a>
			<a href="bandejadeentrada.html" class="submit btn primary-btn">Mensajes</a>		
        </div>

		
        <div id="vu-contenido">
		
			<div id="formularioRegistro">
				<form class="contact_form" action="contact" method="post" id="contacto">
					<ul>
						<li>
							<label>Nombre:</label> 
							<input text="submit" name="nombreEvento" required />
						</li>
						</br>
						<li>
							<label>Fecha:</label>
							<input text="submit" name="fecha" placeholder="dd/MM/yyyy" required />
						</li>
						</br>
						<li>
							<label>Plazas disponibles:</label>
							<input text="submit" name="plazas" required />
						</li>
						</br>
						<li>
							<label>Precio:</label>
							<input text="submit" name="precio" required />
						</li>
						</br>
						<li>
							<label>Tipo de evento:</label>
							<select name="tipoevento">
								<option value="1" selected>Concierto</option>
								<option value="2">Fiesta</option>
								<option value="3">Cine</option>
							</select>
						</li>
						</br>
						<li>
							<label>Descripcion:</label>
							</br>
							<textarea name="descripcion" cols="50" rows="6" required></textarea>
						</li>
						</br>
						<li>
							<label>Imagen:</label>
							<input type="file" name="imagen"/>
						</li>
						</br>

							<a href="vistapromotor.html" class="btn-login">Crear</a> <!--aqui tendra que aparecer un mensaje de "creado con exito" -->
						
					</ul>
				</form>
			</div>
        </div>

		
        <div id ="vu-barra-derecha"> 
            <div id="vu-imp-contactos">
                    <img src="includes/img/gmail-logo.jpg"> GMAIL<br>
                    Encuentra a personas que conoces.<br>
                    <a href="#" class="vu-imp-contactos-gmail">Importar contactos de gmail</a>
            </div>  
            <div id="vu-twitter"><img src="includes/img/twitter-logo.jpg"> TWITTER<br>
                    Vincula tu cuenta.<br>
                    <a href="" class="twitter-share-button">Vincular</a></div>
        </div>
	   </div>
    </body>

</html>