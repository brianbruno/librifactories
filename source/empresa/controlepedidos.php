<html>
<head>
    <!--Import jQuery before materialize.js-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Meu estilo-->
	<link rel="stylesheet" type="text/css" href="source/empresa/style/estilo.css">
	<!--Meu script-->
	<script src="source/empresa/script/funcoes.js"></script>
</head>

<body>
    <!-- CABEÇALHO -->
    <? require('source/empresa/templates/header.php'); ?>
    <!-- FIM DO CABEÇALHO -->
	<div class="container">
		<div class="col s12" div="filtros">
            <div id="divEsquerda">
				<span class="fl">
					<input name="group1" type="radio" id="test1" checked />
					<label for="test1">Todos os pedidos</label>
    			</span>
    			<span class="fl">
      				<input name="group1" type="radio" id="test2" />
      				<label for="test2">Pedidos aprovados</label>
    			</span>
    			<span class="fl">
      				<input name="group1" type="radio" id="test3" />
      				<label for="test3">Pedidos rejeitados</label>
    			</span>
            </div>
            <div class="input-field select" id="divFiltrarPor">  
                <select class="validate">
                    <option value="" disabled selected>Filtrar por: </option>
                    <option value="1">Data</option>
                    <option value="2">Preço</option>
                    <option value="3">Situação</option>
                </select>
            </div>
  		</div> <hr>
		<table class="responsive-table centered">
        <thead>
          <tr>
              <th>Cod.</th>
              <th>Data do pedido</th>
              <th>Custo de producao</th>
			  <th>Lucro esperado</th>
			  <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>#00042</td>
            <td>01/04/2017</td>
            <td>R$30,00</td>
			<td>R$20,00</td>
			<td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Mais detalhes</a></td>
          </tr>
          <tr>
            <td>#02235</td>
            <td>01/04/2017</td>
            <td>R$300,00</td>
			<td>R$200,00</td>
			<td><a class="waves-effect waves-light btn modal-trigger" href="#modal2">Mais detalhes</a></td>
          </tr>
          <tr>
            <td>#03395</td>
            <td>01/04/2017</td>
            <td>R$3000,00</td>
			<td>R$2000,00</td>
			<td><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Mais detalhes</a></td>
          </tr>
        </tbody>
      </table>
	</div>
	
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="pedidoEsquerda">
		<h5>Itens</h5>
		<div class="itensPedido" onmouseleave="sumirImagem(1);">
			<div class="item" onmouseenter="mostrarImagem(1, 1);">Pote</div>
			<div class="item" onmouseenter="mostrarImagem(1, 2);">Potinho</div>
			<div class="item" onmouseenter="mostrarImagem(1, 3);">Latinha</div><br>
			<div class="item" onmouseenter="mostrarImagem(1, 4);">Cereal</div>
			<div class="item" onmouseenter="mostrarImagem(1, 5);">Tomate</div>
			<div class="item" onmouseenter="mostrarImagem(1, 6);">Chocolate</div>
		</div>
		<div class="materiasPrimas">
			<h5>Materia-prima a comprar</h5>
			PET - R$50,00<br>
			Polipropileno - R$30,00
			<hr>
			Total: R$80,00
		</div>
		<div class="tempoEstimado">
			<h5>Tempo estimado</h5>
			Importar materia-prima - 3 dias<br>
			Producao - 4 dias<br>
			Envio - 5 anos
			<hr>
			Total: 5 anos e 7 dias
		</div>
	  </div>
	  <div class="pedidoDireita">
		<h5 style="text-align: center" class="nomeProduto">Shulambs</h5>
		<hr>
		<div class="pd">
			<div class="detalhes-esquerda">
				<div class="preco-unitario"></div><br>
				<div class="preco-total"></div>
				<div class="custo-producao"></div>
			</div>
			<div class="imagemProduto"></div>
		</div>
		<div class="descricaoProduto"></div>
	  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Rejeitar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aprovar</a>
    </div>
  </div> 	
	<!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <div class="pedidoEsquerda">
		<h5>Itens</h5>
		<div class="itensPedido" onmouseleave="sumirImagem(2);">
			<div class="item" onmouseenter="mostrarImagem(2, 1);">Pote</div>
			<div class="item" onmouseenter="mostrarImagem(2, 2);">Potinho</div>
			<div class="item" onmouseenter="mostrarImagem(2, 3);">Latinha</div><br>
			<div class="item" onmouseenter="mostrarImagem(2, 4);">Cereal</div>
			<div class="item" onmouseenter="mostrarImagem(2, 5);">Tomate</div>
			<div class="item" onmouseenter="mostrarImagem(2, 6);">Chocolate</div>
		</div>
		<div class="materiasPrimas">
			<h5>Materia-prima a comprar</h5>
			PET - R$50,00<br>
			Polipropileno - R$30,00
			<hr>
			Total: R$80,00
		</div>
		<div class="tempoEstimado">
			<h5>Tempo estimado</h5>
			Importar materia-prima - 3 dias<br>
			Producao - 4 dias<br>
			Envio - 5 anos
			<hr>
			Total: 5 anos e 7 dias
		</div>
	  </div>
	  <div class="pedidoDireita">
		<h5 style="text-align: center" class="nomeProduto">Shulambs</h5>
		<hr>
		<div class="pd">
			<div class="detalhes-esquerda">
				<div class="preco-unitario"></div><br>
				<div class="preco-total"></div>
				<div class="custo-producao"></div>
			</div>
			<div class="imagemProduto"></div>
		</div>
		<div class="descricaoProduto"></div>
	  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Rejeitar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aprovar</a>
    </div>
  </div>
	<!-- Modal Structure -->
  <div id="modal3" class="modal">
    <div class="modal-content">
      <div class="pedidoEsquerda">
		<h5>Itens</h5>
		<div class="itensPedido" onmouseleave="sumirImagem(3);">
			<div class="item" onmouseenter="mostrarImagem(3, 1);">Pote</div>
			<div class="item" onmouseenter="mostrarImagem(3, 2);">Potinho</div>
			<div class="item" onmouseenter="mostrarImagem(3, 3);">Latinha</div><br>
			<div class="item" onmouseenter="mostrarImagem(3, 4);">Cereal</div>
			<div class="item" onmouseenter="mostrarImagem(3, 5);">Tomate</div>
			<div class="item" onmouseenter="mostrarImagem(3, 6);">Chocolate</div>
		</div>
		<div class="materiasPrimas">
			<h5>Materia-prima a comprar</h5>
			PET - R$50,00<br>
			Polipropileno - R$30,00
			<hr>
			Total: R$80,00
		</div>
		<div class="tempoEstimado">
			<h5>Tempo estimado</h5>
			Importar materia-prima - 3 dias<br>
			Producao - 4 dias<br>
			Envio - 5 anos
			<hr>
			Total: 5 anos e 7 dias
		</div>
	  </div>
	  <div class="pedidoDireita">
		<h5 style="text-align: center" class="nomeProduto">Shulambs</h5>
		<hr>
		<div class="pd">
			<div class="detalhes-esquerda">
				<div class="preco-unitario"></div><br>
				<div class="preco-total"></div>
				<div class="custo-producao"></div>
			</div>
			<div class="imagemProduto"></div>
		</div>
		<div class="descricaoProduto"></div>
	  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Rejeitar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aprovar</a>
    </div>
  </div>
	
</body>

</html>