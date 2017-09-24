<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="source/empresa/style.css" media="screen,projection" />
    <title>Libri Factories</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- CABEÇALHO -->
    <? require('source/empresa/templates/header.php'); ?>
    <!-- FIM DO CABEÇALHO -->
    <div id="corpo" class="container">    
        <center><h1>Aprovar compras</h1></center>
        <table class="highlight">
            <thead>
                <tr>
                    <th>COD</th>
                    <th>Data do pedido</th>
                    <th>Valor total</th>
                    <th>Analisar pedido</th>
                </tr>
            </thead>

            <tbody>
                <tr class="itemtabela">
                    <td>103285</td>
                    <td>12/09/2017</td>
                    <td>R$ 1270,30</td>
                    <td><center><i class="material-icons">view_list</i></center></td>
                </tr>
                <tr class="itemtabela">
                    <td>109855</td>
                    <td>12/09/2017</td>
                    <td>R$ 782,20</td>
                    <td><center><i class="material-icons">view_list</i></center></td>
                </tr>
                <tr class="itemtabela">
                    <td>109825</td>
                    <td>12/09/2017</td>
                    <td>R$ 7856,30</td>
                    <td><center><i class="material-icons">view_list</i></center></td>
                </tr>
            </tbody>
        </table>
            
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>
