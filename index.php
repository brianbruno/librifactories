<?php

    $opcao = ""; 
    if (count($_GET) > 0) $opcao = $_GET['opcao'];

    switch ($opcao) {
        case "aprovarencomenda":            
            $nomeTela = "Aprovar Encomenda";
            include('source/empresa/aprovarencomenda.php');
            break;
        case "empresainicio":            
            $nomeTela = "Libri Factories";
            include('source/empresa/inicio.php');
            break;
        case "controlepedidos":
            $nomeTela = "Controle de Pedidos";
            include('source/empresa/controlepedidos.php');
            break;
        case "meuspedidos":
            $nomeTela = "Meus Pedidos";
            include('source/cliente/meuspedidos.php');
            break;
        case "relatorios":
            $nomeTela = "Relatórios";
            include('source/empresa/relatorios.php');
            break;
        case "orcamento":
            $nomeTela = "Orçamento";
            include('source/empresa/orcamento.php');
            break;
        default:
            include ('source/inicio.php');
            break;
    }

?>