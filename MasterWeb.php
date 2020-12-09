<?php
session_start();
include "includes/autenticado.php";

?>
<html>
    <head>
        <title> Master Web </title>
        <meta charset="UTF-8">
        <style>
            p.asignatura {
                font-size:13pt;
                margin-top:-10pt;
            }
            a:link {text-decoration:none;}
            a:visited {text-decoration:none}
            a:hover {color:blue;}
            a.matricula:link {color:red;}
            a.matricula:visited {color:red;}
            a.matricula:hover {color:blue;}

        </style>
    </head>
    <body>    
        <br><br>
    <center>
        <img src="logo.png" width= 120 height= 60>
        <h1> Máster en Ingeniería Web </H1>
        <HR> <BR>
        <p class='asignatura'><a href = 'masterweb.php'> Ingeniería Web: Visión General (IWVG) </a></p>
        <p class='asignatura'><a href = 'masterweb.php'> Arquitectura y Patrones para Aplicacionew Web (APAW)</a></p>
        <p class='asignatura'><a href = 'masterweb.php'> Front-end para Móviles (FEM) </a></p>
        <p class='asignatura'><a href = 'masterweb.php'> Front-end para Navegadores Web (FENW)</a><br>
        <p class='asignatura'><a href = 'masterweb.php'> Back-end con Tecnologías de Libre Distribución (PHP)</a></p>
        <p class='asignatura'><a href = 'seguridad.php'> Seguridad en Aplicaciones Web (SAW) </a></p>
        <p class='asignatura'><a href = 'masterweb.php'> Back-end con Tecnologías Propietarias (NET) </a></p>
        <p class='asignatura'><a href = 'masterweb.php'> Back-end con Tecnologías de Código Abierto (Spring) </a></p>
        <p class='asignatura'><a href = 'masterweb.php'> Metodologías de Desarrollo Web (MDW)</a></p>
        <p class='asignatura'><a href = 'masterweb.php'> Proyecto Fin de Master </a></p>			
        <HR><br>
        <a class='matricula' href = 'asignaturas.php'> ASIGNATURAS MATRICULADO </a></br></br>
        <a class='matricula' href = 'matricula.php'> NUEVA MATRICULA DE ASIGNATURAS </a>
    </center>
</body>		
</html>