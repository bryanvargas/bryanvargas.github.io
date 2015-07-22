<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pagina Principal del Laboratorio</title>
 
    <?php include 'inc/head_common.php'; ?>  
    <link rel="stylesheet" type="text/css" href="css/workshop.css">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>
    <?php include 'inc/header.php'; ?>
    
    <div id="workshop-list" class="repare">
      <article id="w1" class="workshop workshop-left">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 main-info">
              <h2>Desarrolla Front-end like a boss aprendiendo Bootstrap 3</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Bryan Vargas</a>.</p>
              <a href="detail.php" class="btn btn-custom">ME APUNTO</a>
              <a href="detail.php" class="more-info-link">quiero mas informacion</a>
            </div><!-fin de main-info-->
            <div class="col-xs-4 col-xs-offset-2 date-info">
              <h3 class="highlighted"><strong>W21</strong> 13/14 de abril</h3>
              <h3 class="highlighted">20 plazas</h3>
              <h3 class="highlighted">99 $</h3>
            </div><!--fin de main-info-->
          </div><!--fin de row-->
        </div><!--fin de container-->
      </article>
      <article id="w2" class="workshop workshop-right">
        <div class="container">
          <div class="row">
            <div class="col-xs-4  date-info">
              <h3 class="highlighted"><strong>W38</strong> 19/20 de abril</h3>
              <h3 class="highlighted">15 plazas</h3>
              <h3 class="highlighted">120 $</h3>
            </div><!--fin de main-info-->
            <div class="col-xs-6 col-xs-offset-2 main-info">
              <h2>Desarrolla tus aplicaciones con Adobe Air</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<a href="#">Alejandro Catacata</a>. </p>
              <a href="detail.php" class="more-info-link">quiero mas informacion</a>
              <a href="detail.php" class="btn btn-custom">ME APUNTO</a>              
            </div><!-fin de main-info-->
            
          </div><!--fin de row-->
        </div><!--fin de container-->
      </article>
    </div>

    <?php include 'inc/footer.php'; ?>
    <!--include de los repositorios de bootstrap-->
    <?php include 'inc/footer_common.php' ?>   
  </body>
</html>