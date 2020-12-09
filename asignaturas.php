<?php
session_start();
// TODO Apartado 3: Comprobar autenticación del usuario
?>
<HTML>
    <HEAD>
        <title>Asignaturas matriculado</title>
        <meta charset="UTF-8">
        <style>
            p.asignatura {
                font-size:13pt;
                margin-top:-7pt;
            }
            a:link {text-decoration:none;}
            a:visited {text-decoration:none}
            a:hover {color:blue;}
            a.matricula:link {color:red;}
            a.matricula:visited {color:red;}
            a.matricula:hover {color:blue;}

        </style>
    </HEAD>
    <body>
    <CENTER>
        <img src="logo.png" width= 120 height= 60>
        <br><br>
        <h1> Máster en Ingeniería Web </H1>
        <HR> <H2> Asignaturas en las que se encuentra matriculado <?php echo $_SESSION['user'] ?>: </H2>
        <?php
            include ("includes/abrirbd.php");
            $sql = "SELECT * FROM usuarios WHERE user ='{$_SESSION['user']}'";
            $resultado = mysqli_query($link, $sql);
            $usuario = mysqli_fetch_assoc($resultado);
            $matricula = str_split($usuario['permisos']);
            if (($matricula[0] === 'N') &&
                    ($matricula[1] === 'N') &&
                    ($matricula[2] === 'N') &&
                    ($matricula[3] === 'N') &&
                    ($matricula[4] === 'N') &&
                    ($matricula[5] === 'N')) {
                echo "NO ESTÁ MATRÍCULADO EN NINGUNA ASIGNATURA <br>";
            } else {
                if ($matricula[0] === 'S') {
                    echo ("Ingeniería Web: Visión General <br>");
                }
                if ($matricula[1] === 'S') {
                    echo ("Arquitectura y Patrones para Aplicaciones Web <br>");
                }
                if ($matricula[2] === 'S') {
                    echo ("Front-end para Móviles <br>");
                }
                if ($matricula[3] === 'S') {
                    echo ("Front-end para Navegadores Web <br>");
                }
                if ($matricula[4] === 'S') {
                    echo ("Back-end con Tecnologías de Libre Distribución <br>");
                }
                if ($matricula[5] === 'S') {
                    echo ("Seguridad en Aplicaciones Web<br>");
                }
            }
        ?>
        <BR><BR><a class='matricula' href= 'MasterWeb.php'> VOLVER A MÁSTER INGENIERÍA WEB </A>
    </center>
</BODY>
</HTML>

