<?php

    $opcao = $_GET['opcao'];

    switch ($opcao) {
        case "aprovarencomenda":
            include('source/empresa/aprovarencomenda.php');
            break;
        case "empresainicio":
            include('source/empresa/inicio.php');
            break;
        default:
            include ('source/inicio.php');
            break;
    }

?>