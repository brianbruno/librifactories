<?

$opcao = $_GET["opcao"];

switch ($opcao) {
    case "aprovarencomenda":
        include ('source/empresa/aprovar_encomenda.php');
        break
    default:
        include ('source/cliente/inicio.php');
        break;    
}