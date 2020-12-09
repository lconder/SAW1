<?php
session_start();
// TODO Apartado 3: Comprobar autenticación del usuario

?>
<html>
    <head>
        <style>
            p.asignatura {
                font-size:13pt;
                margin-top:-5pt;
            }
            a:link {text-decoration:none;}
            a:visited {text-decoration:none}
            a:hover {color:blue;}
            a.master:link {color:red;}
            a.master:visited {color:red;}
            a.master:hover {color:blue;}
        </style>
        <title> Seguridad en Aplicaciones Web </title>
        <meta charset="UTF-8">
    </head>
    <body>    
        <br><br>
    <center>
        <img src="logo.png" width= 120 height= 60>
        <br><br>
        <H2> SEGURIDAD EN APLICACIONES WEB </H2>
        <HR> <BR>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 0: Introducción </a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 1: Conceptos previos</a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 2: El protocolo TLS/SSL </a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 3: Cross Site Scripting </a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 4: Robo de Sesiones </a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 5: SQL injection </a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 6: Otros temas de seguridad en aplicaciones web </a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Tema 7: Análisis de vulnerabilidades en aplicaciones web </a></p>
        <BR><HR> 
        <br><br>
        <a class ='master' href = 'MasterWeb.php'> VOLVER A MASTER INGENIERIA WEB
    </center>
</body>
</html>