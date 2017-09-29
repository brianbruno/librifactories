<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Compiled and minified JavaScript -->
    <link rel="stylesheet" href="source/empresa/css/Controle%20de%20Estoque.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


    <title>Controle de Estoque</title>

</head>

<body>
   
   
   
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
    </nav>

    <script>
        $(document).ready(function() {
            $('.collapsible').collapsible();
        });

        function mudarImgParaQuant() {
            $('.imagemDoProduto').toggle(500);
            $('.quantProduto').toggle(500);
        }

        function mudarQuantParaImg() {
            $('.quantProduto').toggle(500);
            $('.imagemDoProduto').toggle(500);
        }


        function carregarCategoria(quant, min, max) {
            var quantidade = quant;
            document.getElementById('quant').innerHTML = quantidade + '<br><span class="uni">unidades</span>';
            if (quant < min) {
                $("#product").addClass("quantAbaixo");
            } else if (quant > max) {
                $("#product").addClass("quantAcima");
            } else if (quant > min && quant < max) {
                $("#product").addClass("quantNormal");
            }
        }

        function alternarNotificacoesProdutos() {
            $("#notificacoes").slideToggle(500);
            $("#productEstoque").slideToggle(500);
            $("#relatorio").slideToggle(500);
            $("#informativa").slideToggle(500);
        }
    </script>


    <!-- Campo de pesquisa no estoque -->


    <div id="pesquisaEstoque">
        <form action="opcaoDePesquisa">
            <div id="campoPesquisa">
                <input id="pesquisaEstoque" type="text" placeholder="Pesquise no estoque">
            </div>
            <br>
            <input class="with-gap" name="group1" type="radio" id="tudo" />
            <label for="tudo">Tudo</label>
            <input class="with-gap" name="group1" type="radio" id="materia" />
            <label for="materia">Materia Prima</label>
            <input class="with-gap" name="group1" type="radio" id="produtos" />
            <label for="produtos">Produtos Prontos</label>
        </form>
    </div>

    <!-- Resultado da pesquisa no estoque   -->

    <section>
        <div id="informativa" class="informativa">
            PRODUTOS NO ESTOQUE
        </div>
        
        <div id="relatorio" class="informativa" >
            RELATÓRIO DE PRODUTOS COM ALERTA
        </div>
        
        <div id="circuloQuant">
            <a onclick="alternarNotificacoesProdutos();" data-position="top" class="tooltipped btn btn-floating btn-large pulse" data-position="top" data-tooltip="Alerta de Excesso/Escassez" data-delay="50">2</a>
        </div>

        <div id="productEstoque">
            <a onclick="loadDoc('fio_de_nylon'), setTimeout(function(){ carregarCategoria(250, 410, 1200);}, 50);" class="products waves-effect waves-light btn">Fio de Nylon</a>

            <a onclick="loadDoc('bombril'), setTimeout(function(){ carregarCategoria(6730, 1000, 4000);}, 50);" class="products waves-effect waves-light btn">Bombril</a>

            <a onclick="loadDoc('cola_tecido'), setTimeout(function(){ carregarCategoria(300, 100, 401);}, 50);" class="products waves-effect waves-light btn">Cola Tecido</a>
        </div>





        <div id="notificacoes">
            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div onclick="loadDoc('fio_de_nylon'), setTimeout(function(){ carregarCategoria(250, 410, 1200);}, 50);" class="collapsible-header">Fio de Nylon</div>
                    <div class="collapsible-body">Contém 250 - Minimo de 410 - Maximo de 1200 <br> FALTAM: 160 unidades.</div>
                </li>
                <li>
                    <div onclick="loadDoc('bombril'), setTimeout(function(){ carregarCategoria(6730, 1000, 4000);}, 50);" class="collapsible-header">Bombril</div>
                    <div class="collapsible-body"><span>Contém 6730 - Minimo de 1000 - Maximo de 4000 <br> SOBRAM: 2730 unidades.</span></div>
                </li>
            </ul>

        </div>



    </section>

    <!-- Barra fixa lateral -->
    <div id="sidebarProdutoEmDestaque" class="z-depth-5">
        <h1>Clique no item que deseja visualizar as informações</h1>
    </div>

    <!--  AJAX -->

    <script>
        function loadDoc(nome) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("sidebarProdutoEmDestaque").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "source/empresa/estoque/" + nome + ".html", true);
            xhttp.send();
        }
    </script>


</body>

</html>
