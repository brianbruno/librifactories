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

        <table class="responsive-table highlight">
            <thead>
                <tr>
                    <th>COD</th>
                    <th>Autor do pedido</th>
                    <th>Valor total</th>
                    <th>Analisar pedido</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>103285</td>
                    <td>Eclair</td>
                    <td>R$ 1270,30</td>
                    <td><i class="material-icons">view_list</i></td>
                </tr>
                <tr>
                    <td>109855</td>
                    <td>Jellybean</td>
                    <td>R$ 782,20</td>
                    <td>$0.87</td>
                </tr>
                <tr>
                    <td>109825</td>
                    <td>Lollipop</td>
                    <td>R$ 7856,30</td>
                    <td><i class="material-icons">view_list</i></td>
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
