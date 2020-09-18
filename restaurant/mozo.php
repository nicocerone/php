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
<a class="navbar-brand" href="mozo.php"><img src = "imagenes/restaurant.png" width="60" height="60" /></a>
<a class="navbar-brand" href="cerrarSesion.php" style = "position:absolute;right:0%"><img src = "imagenes/logout.png" width="60" height="60" /></a>

</nav>
<body style="background-color:#000000;height: 100%; width: 100%; margin: 0;">
    <div class="container">
    <br><br>
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="card mt-5 mb-2">
<div class="card-header bg-dark font-weight-bold" style="color:#D80F0F;font-size: 30px;font-weight: bold"><img src = "imagenes/mozo.png" width="30" height="35" ><?php echo $_SESSION['usuario']; ?></div>
                    <div class="card-body" style="background-color: #535353">
                        <form style="margin-left:2%;margin-right:2%" method="post" name="comidaOBebida" action="validacionMozo.php" name="comidaOBebida" onsubmit="return funcionJS()">
<h5 style="color:#000000;font-size: 20px;font-weight: bold">Ingresar comida/bebida</h5>



<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="comida" value="1">    <img src = "imagenes/hamburguesa.jpg" width="100" height="120" >‎‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎Hamburguesa
  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="comida" value="2"><img src = "imagenes/milanesa.jpg" width="100" height="120" >‎‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎Milanesa con papas fritas  </label>

  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="comida" value="3"><img src = "imagenes/agua.jpg" width="100" height="120" >‎‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎Agua  </label>

  </label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="comida" value="4"><img src = "imagenes/coca.jpg" width="100" height="120" >‎‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎Coca Cola  </label>

  </label>
</div>    <br>

<?php
if (!empty($_SESSION['errorComida'])) {
?>
    <div class="alert alert-danger" id="error_message"><strong><?php echo $_SESSION['errorComida'] ?></strong></div>
<?php
    unset($_SESSION['errorComida']);
}
?>


                             <br>

                             <br>
                            
                            <h5 style="color:#000000;font-size: 20px;font-weight: bold"> Comentarios</h5><input type="text" class="form-control" name="comentarios">
                            <br>
                            <h5 style="color:#000000;font-size: 20px;font-weight: bold"> Mesa</h5><input type="integer" class="form-control" name="numMesa"> <br>
                            
                            <?php
                            if (!empty($_SESSION['errorMesa'])) {
                            ?>
                                <div class="alert alert-danger" id="error_message"><strong><?php echo $_SESSION['errorMesa'] ?></strong></div>
                            <?php
                                unset($_SESSION['errorMesa']);
                            }
                            ?>
                            <?php
                            if (!empty($_SESSION['exito'])) {
                            ?>
                                <div class="alert alert-success" id="error_message"><strong><?php echo $_SESSION['exito'] ?></strong></div>
                            <?php
                                unset($_SESSION['exito']);
                            }
                            ?>
                            <br>
                            <button type="submit" name="submit" class="btn btn-danger" style="background-color:#D80F0F">Enviar pedido</button>
<br><br>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
