<?php
session_start();
// TODO Apartado 3: Comprobar autenticación del usuario
?>
<HTML>
    <HEAD>
        <title>Matrícula de asignaturas</title>
        <meta charset="UTF-8">
    </HEAD>
    <body>
    <center>
        <?php
        if (isset($_POST['Envio'])) {
            include ("includes/abrirbd.php");
            
            if (isset($_POST['IWVG'])) {
                $matricula[0] = 'S';
            } else {
                $matricula[0] = 'N';
            }
            if (isset($_POST['APAW'])) {
                $matricula[1] = 'S';
            } else {
                $matricula[1] = 'N';
            }
            if (isset($_POST['FEM'])) {
                $matricula[2] = 'S';
            } else {
                $matricula[2] = 'N';
            }
            if (isset($_POST['FENW'])) {
                $matricula[3] = 'S';
            } else {
                $matricula[3] = 'N';
            }
            if (isset($_POST['PHP'])) {
                $matricula[4] = 'S';
            } else {
                $matricula[4] = 'N';
            }
            if (isset($_POST['SAW'])) {
                $matricula[5] = 'S';
            } else {
                $matricula[5] = 'N';
            }

            $permisos = implode($matricula);
            $sql = "UPDATE usuarios SET permisos = '{$permisos}' WHERE user ='{$_SESSION['user']}'";
            if (mysqli_query($link, $sql)) {
                echo "<center>";
                echo ("<h3><b>Matrícula realizada correctamente.</h3></b>");
            } else {
                echo "<center>";
                echo "Error en la matrícula.";
            }
            echo ("<br><br><A href= 'MasterWeb.php'> Volver a inicio </A>");
            exit;
        }
        ?>
        <img src="logo.png" width= 120 height= 60>
        <br><br><br>
        <H2> Selecciona las asignaturas en las que quieres matricularte </H2><BR><BR>
        <FORM name="matricula" method=post action="matricula.php">
            <TABLE>
                <TR>
                    <TD align=right><INPUT type="checkbox" name="IWVG" value="Si"></TD>
                    <TD align=left> Ingeniería Web: Visión General (IWVG)</TD>
                </TR>
                <TR>
                    <TD align=right><INPUT type="checkbox" name="APAW" value="Si"></TD>
                    <TD align=left> Arquitectura y Patrones para Aplicaciones Web (APAW)</TD>
                </TR>
                <TR>
                    <TD align=right><INPUT type="checkbox" name="FEM" value="Si"></TD>
                    <TD align=left> Front-end para Móviles (FEM)</TD>
                </TR>
                <TR>
                    <TD align=right><INPUT type="checkbox" name="FENW" value="Si"></TD>
                    <TD align=left> Front-end para Navegadores Web (FENW)</TD>
                </TR><TR>
                    <TD align=right><INPUT type="checkbox" name="PHP" value="Si"></TD>
                    <TD align=left> Back-end con Tecnologías de Libre Distribución (PHP)</TD>
                </TR><TR>
                    <TD align=right><INPUT type="checkbox" name="SAW" value="Si"></TD>
                    <TD align=left> Seguridad en Aplicaciones Web (SAW)</TD>
                </TR>
            </TABLE><BR>
            <INPUT type="submit" name="Envio" value="Enviar">
        </FORM>  
    </CENTER>
</BODY>
</HTML>

