<?php

    $opcao = ""; 
    if (count($_GET) > 0) $opcao = $_GET['opcao'];

    switch ($opcao) {
        case "aprovarencomenda":
            include('source/empresa/aprovarencomenda.php');
            break;
        case "empresainicio":
            include('source/empresa/inicio.php');
            break;
        case "controlepedidos":
            include('source/empresa/Controle de Pedidos - Produção/controlepedidos.php');
            break;
        case "meuspedidos":
            include('source/cliente/Meus Pedidos - Cliente/meuspedidos.php');
            break;
        case "produtosestoque":
            include('source/empresa/controleEstoque.php');
            break;
        default:
            include ('source/inicio.php');
            break;
    }

?>