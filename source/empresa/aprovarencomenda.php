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
        
        <ul id="tabs-swipe-demo" class="tabs ">
            <li class="tab col s3"><a class="active tabitem" href="#pedidospendentes">Pedidos pendentes</a></li>
            <li class="tab col s3"><a class="tabitem" href="#pedidosaprovados">Pedidos aprovados</a></li>
            <li class="tab col s3"><a class="tabitem" href="#pedidosreprovados">Pedidos reprovados</a></li>
        </ul>
        <div id="pedidospendentes" class="col s12 m12 l12">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>Data do pedido</th>
                        <th>Valor total</th>
                        <th><center>Analisar pedido</center></th>
                    </tr>
                </thead>

                <tbody id="tbpedidospendentes">
                    <tr class="itemtabela">
                        <td>103285</td>
                        <td>12/09/2017</td>
                        <td>R$ 1270,30</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#veritens">Ver itens</a></center></td>
                    </tr>
                    <tr class="itemtabela">
                        <td>109855</td>
                        <td>12/09/2017</td>
                        <td>R$ 782,20</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#veritens">Ver itens</a></center></td>
                    </tr>
                    <tr class="itemtabela">
                        <td>109825</td>
                        <td>12/09/2017</td>
                        <td>R$ 7856,30</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#veritens">Ver itens</a></center></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="pedidosaprovados" class="col s12 m12 l12">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>Data da aprovação</th>
                        <th>Valor total</th>
                        <th><center>Informações</center></th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="itemtabela">
                        <td>103285</td>
                        <td>12/09/2017</td>
                        <td>R$ 1270,30</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Ver informações</a></center></td>
                    </tr>
                    <tr class="itemtabela">
                        <td>109855</td>
                        <td>12/09/2017</td>
                        <td>R$ 782,20</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Ver informações</a></center></td>
                    </tr>
                    <tr class="itemtabela">
                        <td>109825</td>
                        <td>12/09/2017</td>
                        <td>R$ 7856,30</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Ver informações</a></center></td>
                    </tr>
                </tbody>
            </table>        
        </div>
        <div id="pedidosreprovados" class="col s12 m12 l12">
            <table class="highlight">
                <thead>
                    <tr>
                        <th>COD</th>
                        <th>Data da aprovação</th>
                        <th>Valor total</th>
                        <th><center>Informações</center></th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="itemtabela">
                        <td>103285</td>
                        <td>12/09/2017</td>
                        <td>R$ 1270,30</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" onclick="">Ver informações</a></center></td>
                    </tr>
                    <tr class="itemtabela">
                        <td>109855</td>
                        <td>12/09/2017</td>
                        <td>R$ 782,20</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#veritens">Ver informações</a></center></td>
                    </tr>
                    <tr class="itemtabela">
                        <td>109825</td>
                        <td>12/09/2017</td>
                        <td>R$ 7856,30</td>
                        <td><center><a class="waves-effect waves-light btn modal-trigger" href="#veritens">Ver informações</a></center></td>
                    </tr>
                </tbody>
            </table>       
        </div>
        <div id="produtosJava">
            <h5>Produtos cadastrados em Java no Backend</h5>
            <table>
                <thead>
                    <th>Nome</th>
                    <th>Valor</th>
                </thead>
                <tbody id="itenscad">
         
                </tbody>
            </table>
        </div>

        <!-- Modal Structure -->
        <div id="veritens" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Aprovar itens do pedido <span id="codpedido"></span></h4>
                <ul class="collection" id="itensModal">
                </ul>
            </div>
            <div class="modal-footer">                
                <span id="cancelaModal"><a href="#!" class="modal-action modal-close waves-effect waves-red btn  red darken-4">Cancelar</a></span>
                <span id="confirmaModal"><a href="#!" class="modal-action modal-close waves-effect waves-green btn green lighten-4">Aprovar</a></span>
            </div>
        </div>
        <!-- Fim do Modal -->
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script> 
    <script type="text/javascript" src="source/empresa/script/scriptencomenda.js"></script>
    <script>
    
        $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('ul.tabs').tabs({
                swipeable : false,
                responsiveThreshold : 1920
            });
            $('.modal').modal();
            $('ul.tabs').tabs('select_tab', 'pedidospendentes');
        });
    </script>
</body>
</html>
