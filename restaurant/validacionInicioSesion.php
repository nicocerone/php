<?php
session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$cumpleUsuario = false;
$cumpleClave = false;
if (strlen($usuario)<6) {
    $_SESSION['errorUsuario'] = 'El campo usuario debe tener por lo menos 6 caracteres.';
    }elseif(preg_match('/[^a-z_\-0-9]/i',$usuario)){
        $_SESSION['errorFormatoUsuario'] = 'El nombre de usuario debe contener solo caracteres alfanuméricos.';
        header("Location:index.php");
        }else{
            $cumpleUsuario=true;
        }
if (strlen($clave)<6){
    $_SESSION['errorClave'] = 'El campo clave debe tener por lo menos 6 caracteres.';
    header("Location:index.php");
}else{
    $cumpleClave = true;
}
if (($cumpleUsuario)&&($cumpleClave)){
    if($usuario == unmozo){
        $_SESSION['usuario'] = $usuario;
        header("Location:mozo.php");
    }
    else if ($usuario == unbartender){
            $_SESSION['usuario'] = $usuario;
            header("Location:bartender.php");
          } else if ($usuario == uncajero){
                    $_SESSION['usuario'] = $usuario;
                    header("Location:cajero.php");
                  } else if ($usuario == uncocinero){
                            $_SESSION['usuario'] = $usuario;
                            header("Location:cocinero.php");
                          }
                          else{
                               $_SESSION['errorDatos'] = 'El usuario o clave no son validos.';
                            header("Location:index.php");
                          }
}
?>
