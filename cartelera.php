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
          if (session_status() == PHP_SESSION_NONE) {
            session_start();
          }
          if(isset($_SESSION['offset'])){
            unset($_SESSION['offset']);
          }
            
          $eventos = getEventos(1);
          echo '<h2>CARTELERA</h2>';
          echo '<ul class="items">';
          foreach($eventos as $evento){
            echo '<li><div class="row"><div class="col-sm-8 col-md-6"><div class="thumbnail"><div class="caption">';
            echo '<h3>'.$evento['Nombre'].'</h3>';
            echo '<p><a href ="infoEvento.php?evento='.$evento['ID'].'"><img data-holder-rendered="true" src ="'.$evento['Imagen'].'"/></a></p>';
            echo '<p>Fecha: '.$evento['Fecha'].'</p>';
            echo '</div></div></div></div></li>';
          }
          echo '</ul>';
          echo '<div id="lastPostsLoader"></div>';
         ?>
      </div>
      <div class="clearfix visible-xs-block visible-sm-block"></div>
      <div class="sidebar-right container-fixed col-xs-4 col-sm-4 col-md-3">
      </div>
    </div>
  </div>
  <!--Fin Contenido-->
  <?php require(__DIR__.'/includes/php/footer.php');?>
  <script src="includes/js/jquery.min.js"></script>
  <script src="includes/js/bootstrap.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

  var maxEventos = 0;
  $.get("includes/php/countEventos.php?tipo=1", function(data){
      maxEventos = data;
    });
  
    function lastAddedLiveFunc()
    {
        $('div#lastPostsLoader').html('<img src="includes/img/loading.gif"/>');

        $.get("includes/php/loadevents.php?tipo=1", function(data){
            if (data != "") {
                var eventos = JSON.parse(data);
                var htmlEventos = "";
                for(var i=0; i<eventos.length; i++){
                  htmlEventos += '<li><div class="row"><div class="col-sm-8 col-md-6"><div class="thumbnail"><div class="caption"><h3>'
                  +eventos[i]['Nombre']+'</h3><p><a href ="infoEvento.php?evento='
                  +eventos[i]['ID']+'"><img data-holder-rendered="true" src ="'+eventos[i]['Imagen']
                  +'"/></a></p><p>Fecha: '+eventos[i]['Fecha']+'</p></div></div></div></div></li>';
                }
                $(".items").append(htmlEventos);
            }
            $('div#lastPostsLoader').empty();
        });
    };
    //lastAddedLiveFunc();
    $(window).scroll(function(){
    
      var nEventos = $('.items li').length;

      if(nEventos < maxEventos){
        var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
        var  scrolltrigger = 0.95;

        if  ((wintop/(docheight-winheight)) > scrolltrigger) {
         lastAddedLiveFunc();
        }
      }
    });
  });
</script>
</body>
</html>
<?php require(__DIR__.'/includes/php/cleanup.php');?>