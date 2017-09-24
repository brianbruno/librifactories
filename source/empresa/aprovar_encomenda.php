<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <title>Libri Factories</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- CABEÇALHO -->
    <? require('source/empresa/templates/header.php'); ?>
    <!-- FIM DO CABEÇALHO -->
    <div id="corpo">
        <h1>Aprovar solicitações de compra</h1>
        <table class="responsive-table highlight">
            <thead>
                <tr>
                    <th>COD.</th>
                    <th>Produtos</th>
                    <th>Valor total</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>102322</td>
                    <td>Listar</td>
                    <td>R$ 32,25</td>
                </tr>
                <tr>
                    <td>102320</td>
                    <td>Listar</td>
                    <td>R$ 4.856,23</td>
                </tr>
                <tr>
                    <td>102300</td>
                    <td>Listar</td>
                    <td>R$ 7.856.74</td>
                </tr>
            </tbody>
        </table>  
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="source/cliente/script/script.js"></script>
</body>
</html>


