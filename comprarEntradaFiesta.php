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
  <link rel="stylesheet" type="text/css" href="includes/css/entradasCine.css">
  <link rel="stylesheet" type="text/css" href="includes/css/formularios.css" />
  <!--Favicon-->
  <link rel="shortcut icon" href="includes/img/favicon.png" />
</head>
<?php 
  require(__DIR__.'/includes/php/header.php');  
  require(__DIR__.'/includes/php/compras.php');
  require(__DIR__.'/includes/php/eventosBD.php');
  require(__DIR__.'/includes/php/asisteBD.php');
  if(isset($_POST['procesarCompra'])) {
    $compra = $_SESSION['compra'];
    $usuario = $_SESSION['username'];
    $butacas = $_POST['Butacas'];
    $nEntradas = $_POST['NumEntradas'];
    $result = procesaCompra($compra,$usuario,$butacas,$nEntradas);
  }
?>
<body>
  <div class="main">
    <div class="container">
      <div class="sidebar-left container-fixed col-xs-4 col-sm-4  col-md-2">
        <!-- Barra lateral izquierda -->
      </div>
      <div class="container-fixed col-xs-8 col-sm-8 col-md-10">
        <h1><img src="includes/img/toastl.png"/> Elige tus entradas  <img src="includes/img/toast.png"/></h1>
        <?php
        
        $evento = getInfoEvento($_GET['evento']);
        $_SESSION['compra']['precioEntrada'] = $evento['Precio'];
        $_SESSION['compra']['evento'] = $evento['ID'];
        $_SESSION['compra']['capacidad'] = $evento['PlazasDisponibles'];
        $_SESSION['compra']['nAsistentes'] = countAsistentes($evento['ID']);
        
        if(isset($result)){
          echo '<ul>';
          foreach($result as $error){
              echo '<li class = "resultError">'.$error.'</li>';
          }
          echo '</ul>';
        }
      ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="numbers-row">
            <label for="name">Entradas: </label>
            <input type="text" name="NumEntradas" id="nEntradas" value="1"/>
          </div>
          <input type="hidden" name="procesarCompra"/>
          <div class="buttons">
            <input class="myButton" type="submit" value="Confirmar" id="submit"/>
          </div>
        </form>

      </div>
      <div class="clearfix visible-xs-block visible-sm-block"></div>
      <div class="sidebar-right container-fixed col-xs-4 col-sm-4 ">
      </div>
    </div>
  </div>
  <?php require(__DIR__.'/includes/php/footer.php');?>
  <script src="includes/js/jquery.min.js"></script>
  <script src="includes/js/bootstrap.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $(".numbers-row").append('<div class="inc button">+</div><div class="dec button">-</div>');

    $(".button").on("click", function() {

      var $button = $(this);
      var oldValue = $button.parent().find("input").val();

      if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
       // Don't allow decrementing below zero
        if (oldValue > 1) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 1;
        }
      }

      $button.parent().find("input").val(newVal);

    });

  });
  </script>
</body>
</html>
<?php require(__DIR__.'/includes/php/cleanup.php');?>