<?php
session_start();
// TODO 10. Autenticación de cliente con certificado. Solución TLS 1.3 

if (isset($_POST['registro'])) {
    header("Location: registro.php");
    exit;
}

if (isset($_POST['login'])) {
    // TODO Apartado 5: Comprobar captcha
    include ("includes/abrirbd.php");
    $sql = "SELECT * FROM usuarios WHERE user ='{$_POST['user']}'";
    $resultado = mysqli_query($link, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        // TODO Apartado 4: Incorporar salt al hash
        $hash = hash("sha256", $_POST['passwd'], false);
        if ($hash == $usuario['password']) {
            $_SESSION['autenticado'] = 'correcto';
            $_SESSION['user'] = $usuario['user'];
            header("Location:MasterWeb.php");
        } else {
            header("Location: NoAuth.php");
        }
    } else {
        $_SESSION['autenticado'] = 'incorrecto';
        header("Location: NoAuth.php");
    }
    mysqli_close($link);
    exit;
}
?>

<html>
    <head>
        <title> Login </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <br><br><br>
    <center>
        <img src="logo.png" width= 120 height= 60>
        <br><br><br>
        <form action= '<?php "{$_SERVER['PHP_SELF']}" ?>' method = post>
            <table bgcolor = 'lightgrey'> 
                <tr>
                    <td width= 100> Usuario: </td> 
                    <td> <input type = text name ='user'></td>
                </tr>
                <tr>
                    <td width= 100> Password: </td> 
                    <td> <input type = password name ='passwd'></td>
                </tr>
            </table><br>
            <input type=submit name = 'login' value = "LOGIN"><br><br><br>
            <input type=submit name = 'registro' value = "REGISTRAR USUARIO"> 
        </form>
    </center>
</body>
</html>