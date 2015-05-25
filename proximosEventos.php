<!DOCTYPE html>
<html>
<head>
  <title>Finddle</title>
  <meta charset="utf-8" />
  <!-- Latest compiled CSS -->
  <link rel="stylesheet" type="text/css" href="includes/css/bootstrap.css">
  <!-- Optional theme -->
  <link rel="stylesheet" type="text/css" href="includes/css/bootstrap-theme.min.css">
  <!-- Personal CSS -->
  <link rel="stylesheet" type="text/css" href="includes/css/mycss.css">
  <!--Favicon-->
  <link rel="shortcut icon" href="includes/img/favicon.png" />
</head>
<?php 
require(__DIR__.'/includes/php/usuarios.php');
    if(isset($_POST['formLogin'])) {
        $result = formLogin($_POST);
    }
?>
<body>
<?php 
    require(__DIR__.'/includes/php/header.php');  
    require(__DIR__.'/includes/php/eventosBD.php');
?>

  <!--Inicio Contenido-->
  <div class="main">
    <div class="container">
      <div class="sidebar-left container-fixed col-xs-4 col-sm-4 col-md-3 ">
        <!-- Barra lateral izquierda -->
      </div>
      <div class="container-fixed col-xs-8 col-sm-8 col-md-6">
         <?php 
         	$peliculas = getEventos(0);
         	foreach($peliculas as $peli){
         		echo '<div class="eventosElem">';
         		echo '<h2>'.$peli['Nombre'].'</h2>';
         		echo '<p><a href ="infoEvento.php?evento='.$peli['ID'].'"><img src ="'.$peli['Imagen'].'"/></a></p>';
         		echo '</div>';
         	}
         ?>
      </div>
      <div class="clearfix visible-xs-block visible-sm-block"></div>
      <div class="sidebar-right container-fixed col-xs-4 col-sm-4 col-md-3">
      </div>
    </div>
  </div>
  <!--Fin Contenido-->
  <?php require(__DIR__.'/includes/php/footer.php');?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
<?php require(__DIR__.'/includes/php/cleanup.php');?>