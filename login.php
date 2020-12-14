<?php
session_start();

if($_SERVER['SSL_CLIENT_VERIFY'] != "SUCCESS") {
    header("Location: NoAuth.php");
    exit(0);
} else {
    include ("includes/abrirbd.php");
    $sql = "SELECT * FROM usuarios WHERE user ='{$_SERVER['SSL_CLIENT_S_DN_CN']}'";
    $resultado = mysqli_query($link, $sql);
    if (mysqli_num_rows($resultado) == 1) {
        $_SESSION['autenticado'] = 'correcto';
        $_SESSION['user'] = $usuario['user'];
        header("Location: MasterWeb.php");
    } else {
        header("Location: NoAuth.php");
    }
}

if (isset($_POST['registro'])) {
    header("Location: registro.php");
    exit;
}

if ((isset($_POST['login']) && $_POST['captcha']==$_SESSION['CAPTCHA']))
{
    include ("includes/abrirbd.php");
    $sql = "SELECT * FROM usuarios WHERE user ='{$_POST['user']}'";
    $resultado = mysqli_query($link, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        $hash = hash("sha256", $_POST['passwd'] . $usuario['salt'], false);
        if ($hash == $usuario['password']) {
            $_SESSION['autenticado'] = 'correcto';
            $_SESSION['user'] = $usuario['user'];
            header("Location: MasterWeb.php");
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
            <img src="captcha.php">
            <input type=text name='captcha'><br><br>
            <input type=submit name = 'login' value = "LOGIN"><br><br><br>
            <input type=submit name = 'registro' value = "REGISTRAR USUARIO"> 
        </form>
    </center>
</body>
</html>