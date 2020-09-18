<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!------------------------------------link css------------------------------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!------------------------------------fin------------------------------------>
<!------------------------------------link JS-------------------------------->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!------------------------------------fin------------------------------------>
<!------------------------------bootstrap de alert------------------------------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!------------------------------------------------------------------------------->
<?php
session_start();
?>
<nav class="navbar navbar-expand-lg" style="background-color:#333333;height:10%">
<a class="navbar-brand" href="cajero.php"><img src = "imagenes/restaurant.png" width="60" height="60" /></a>
<a class="navbar-brand" href="cerrarSesion.php" style = "position:absolute;right:0%"><img src = "imagenes/logout.png" width="60" height="60" /></a>

</nav>
<body style="background-color:#000000;height: 100%; width: 100%; margin: 0;">
    <div class="container">
    <br><br>
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="card mt-5 mb-2" >
                    <div class="card-header bg-dark font-weight-bold" style="color:#D80F0F;font-size: 30px;font-weight: bold"><img src = "imagenes/mesas.png" width="30" height="30" >Mesas cerradas</div>
                    <div class="card-body" style="background-color: #535353;">
<a href="cajero.php" style="margin-top:5px;width: 160px" class="btn btn-outline-danger"><img src = "imagenes/volver.png" width="30" height="30" >Volver</a> <br><br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"><div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
       <div class="card-header">8/9/20 18:00hs<span style="float:right;">
           $1000
       </span></div>
       <div class="card-body">
         <h5 class="card-title">Mesa 1</h5>
         <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
       </div>
     </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 2</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 3</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 4</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 5</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 6</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 7</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 8</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 9</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header">8/9/20 18:00hs<span style="float:right;">
          $1000
      </span></div>
      <div class="card-body">
        <h5 class="card-title">Mesa 10</h5>
        <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
      </div>
    </div>
      <br><br><br><br>
    </div>
    <div class="carousel-item">
<div class="card text-white bg-dark mb-3" style="max-width: 15rem;">
        <div class="card-header">8/9/20 18:00hs<span style="float:right;">
            $1000
        </span></div>
        <div class="card-body">
          <h5 class="card-title">Mesa 8</h5>
          <p class="card-text">Milanesa con papas fritas, Agua, Hamburguesa</p>
        </div>
      </div>
    <br><br><br><br>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
                        <form style="margin-left:2%;margin-right:2%" method="post" name="formularioInicioSesion" action="validacionInicioSesion.php?&id=<?php echo $id?>&intentos=<?php echo $cantidad?>" name="registro" onsubmit="return funcionJS()">
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
