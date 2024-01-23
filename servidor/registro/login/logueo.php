<?php session_start();
    include "../../clases/Auth.php";
    $usuario = $_POST ['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->logueo($usuario, $password)) {
        header("location:../../inicio.php");
    }else {
        echo "No se pudo realizar el logueo";
    }
    

?>