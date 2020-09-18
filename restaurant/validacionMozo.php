<?php

session_start();
//-------------------------inicio de obtencion de datos-----------
$comida = $_POST['comida'];
$mesa = $_POST['numMesa'];

if (empty($comida))  {
    $_SESSION['errorComida'] = 'No ingresó ni una comida ni una bebida.';
    header("Location:mozo.php");
}
if (empty($mesa)) {
    $_SESSION['errorMesa'] = 'No ingresó el número de mesa.';
    header("Location:mozo.php");
}
if (!empty($mesa) and !empty($comida)) {
    $_SESSION['exito'] = 'El pedido fue enviado con éxito.';
    header("Location:mozo.php");
}
?>
