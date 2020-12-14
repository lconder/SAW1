<?php
session_start();

if($_SERVER['SSL_CLIENT_VERIFY'] != "SUCCESS") {
    header("Location: NoAuth.php");
    exit(0);
} else {
    include ("../includes/abrirbd.php");
    $sql = "SELECT * FROM usuarios WHERE user ='{$_SERVER['SSL_CLIENT_S_DN_CN']}'";
    $resultado = mysqli_query($link, $sql);
    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['autenticado'] = 'correcto';
        $_SESSION['user'] = $usuario['user'];
        header("Location: ../MasterWeb.php");
    } else {
        header("Location: ../NoAuth.php");
    }
}

?> 