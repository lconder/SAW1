<?php
    if(!$_SESSION['autenticado']=='correcto') {
        header('Location: NoAuth.php');
        exit();
    }