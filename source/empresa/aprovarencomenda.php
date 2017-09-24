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
        <center><h1 id="titulo">Aprovar compras</h1></center>
        <table class="highlight">
            <thead>
                <tr>
                    <th>COD</th>
                    <th>Data do pedido</th>
                    <th>Valor total</th>
                    <th><center>Analisar pedido</center></th>
                </tr>
            </thead>

            <tbody>
                <tr class="itemtabela">
                    <td>103285</td>
                    <td>12/09/2017</td>
                    <td>R$ 1270,30</td>
                    <td><center><a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons">view_list</i>Ver itens</a></center></td>
                </tr>
                <tr class="itemtabela">
                    <td>109855</td>
                    <td>12/09/2017</td>
                    <td>R$ 782,20</td>
                    <td><center><a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons">view_list</i>Ver itens</a></center></td>
                </tr>
                <tr class="itemtabela">
                    <td>109825</td>
                    <td>12/09/2017</td>
                    <td>R$ 7856,30</td>
                    <td><center><a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons">view_list</i>Ver itens</a></center></td>
                </tr>
            </tbody>
        </table>
        
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
        
        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Aprovar itens do pedido 109825</h4>
                <ul class="collection">
                    <li class="collection-item avatar">
                        <img src="images/yuna.jpg" alt="" class="circle">
                        <span class="title">Title</span>
                        <p>First Line <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle">folder</i>
                        <span class="title">Title</span>
                        <p>First Line <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle green">insert_chart</i>
                        <span class="title">Title</span>
                        <p>First Line <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle red">play_arrow</i>
                        <span class="title">Title</span>
                        <p>First Line <br> Second Line
                        </p>
                        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aprovar</a>
            </div>
        </div>
         
            
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script>
    
        $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
    </script>
</body>
</html>
