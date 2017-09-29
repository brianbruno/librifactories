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
	<link rel="stylesheet" type="text/css" href="source/cliente/Meus Pedidos - Cliente/estilo.css">
	<!--Meu script-->
  <script src="source/cliente/Meus Pedidos - Cliente/funcoes.js"></script>
</head>

<body>
	<nav>
    	<div class="nav-wrapper blue-grey darken-4">
      		<a href="#!" class="brand-logo blue-grey-text text-lighten-4">Libri Factories</a> 
      		<a href="#!" class="brand-logo center">Meus Pedidos</a>
      		<ul id="nav-mobile" class="right hide-on-med-and-down">
        		<li><a class="blue-grey-text text-lighten-4" href="sass.html">Início</a></li>
        		<li><a class="blue-grey-text text-lighten-4" href="badges.html">Sobre</a></li>
        		<li><a class="blue-grey-text text-lighten-4" href="collapsible.html">Minha Conta</a></li>
      		</ul>
	    	</div>
  	</nav>
  	<div class="container">
  		<div class="col s12" div="filtros">
                <div id="divEsquerda">
    			  <span class="fl">
      			    <input name="group1" type="radio" id="test1" checked />
      				<label for="test1">Todos os pedidos</label>
    			  </span>
    			  <span class="fl">
      				<input name="group1" type="radio" id="test2" />
      				<label for="test2">Pedidos em aberto</label>
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
		<div class="col s12" id="pedidos">
  			<div class="item noSelect primeiro esquerda" onclick="toggleDI(1);" id="i1">
				<div class="descricao">
					<span class="nome">Pedido #00042</span><br>
					Situação: Entregue<br>
          Data: 01/04/2017<br>
					Valor: R$50,00
				</div>
  			</div>
			<div class="detalhes-item" id="dI1">
  
				<div class="preloader-wrapper big active">
      <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
              <div class="circle"></div>
          </div>
          <div class="gap-patch">
              <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
              <div class="circle"></div>
          </div>
      </div>
  </div>
        <div class="divTable" id="t">
				<table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(1)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(1)"><span> &lt </span></div>
				</div>
			
        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

            </div>
            
          
  			<div class="item noSelect primeiro direita" onclick="toggleDI(2);" id="i2">
				<div class="descricao">
					<span class="nome">Pedido #02235</span><br>
					Situação: Preparando estoque<br>
          Data: 01/04/2017<br>
					Valor: R$500,00
				</div>
            </div>
			<div class="detalhes-item" id="dI2">
  
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
        <div class="divTable" id="t">
        <table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(2)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(2)"><span> &lt </span></div>
				</div>


        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn red darken-4 modal-trigger" href="#modal1"><i class="material-icons left">cancel</i>Cancelar pedido</a>
        <a class="waves-effect waves-light btn"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

				</div>
  			
			<div class="item noSelect esquerda" onclick="toggleDI(3);" id="i3">
				<div class="descricao">
					<span class="nome">Pedido #03395</span><br>
					Situação: Na fila para produção<br>
          Data: 01/04/2017<br>
					Valor: R$5000,00
				</div>
  			</div>
			<div class="detalhes-item" id="dI3">
  
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
        <div class="divTable" id="t">
        <table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(3)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(3)"><span> &lt </span></div>
				</div>


        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn red darken-4 modal-trigger" href="#modal1"><i class="material-icons left">cancel</i>Cancelar pedido</a>
        <a class="waves-effect waves-light btn"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

				</div>
  			
			<div class="item noSelect direita" onclick="toggleDI(4);" id="i4">
				<div class="descricao">
					<span class="nome">Pedido #04242</span><br>
					Situação: Em produção<br>
          Data: 01/04/2017<br>
					Valor: R$50000,00
				</div>
            </div>
			<div class="detalhes-item" id="dI4">
  
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
        <div class="divTable" id="t">
        <table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(4)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(4)"><span> &lt </span></div>
				</div>
            
        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn" onclick="$('#modCancelar').show('slow'); setTimeout(function(){$('.container').toggleClass('inativo');},100);"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

				</div>
			<div class="item noSelect esquerda" onclick="toggleDI(5);" id="i5">
				<div class="descricao">
					<span class="nome">Pedido #15260</span><br>
					Situação: Na transportadora<br>
          Data: 01/04/2017<br>
					Valor: R$500000,00
				</div>
  			</div>
			<div class="detalhes-item" id="dI5">
  
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
        <div class="divTable" id="t">
        <table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(5)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(5)"><span> &lt </span></div>
				</div>
  			 
        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

				</div>
			<div class="item noSelect direita" onclick="toggleDI(6);" id="i6">
				<div class="descricao">
					<span class="nome">Pedido #15682</span><br>
					Situação: Na transportadora<br>
          Data: 01/04/2017<br>
					Valor: R$5000000,00
				</div>
  			</div>
			<div class="detalhes-item" id="dI6">
  
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
        <div class="divTable" id="t">
        <table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(6)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(6)"><span> &lt </span></div>
				</div>
        

        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

				</div>
		
			<div class="item noSelect ultimo esquerda" onclick="toggleDI(7);" id="i7">
				<div class="descricao">
					<span class="nome">Pedido #22277</span><br>
					Situação: Na transportadora<br>
          Data: 01/04/2017<br>
					Valor: R$50000000,00
				</div>
  			</div>
			<div class="detalhes-item" id="dI7">
  
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
        <div class="divTable" id="t">
        <table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(7)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(7)"><span> &lt </span></div>
				</div>
        
        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

				</div>
		
			<div class="item noSelect ultimo direita" onclick="toggleDI(8);" id="i8">
				<div class="descricao">
					<span class="nome">Pedido #28822</span><br>
					Situação: Na transportadora<br>
          Data: 01/04/2017<br>
					Valor: R$500000000,00
				</div>
            </div>
			<div class="detalhes-item" id="dI8">
  
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
        <div class="divTable" id="t">
        <table class="responsive-table centered tt">
        <thead>
          <tr>
              <th>Itens</th>
              <th>Quantidade</th>
              <th>Formato</th>
              <th>Material</th>
              <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Embalagens</td>
            <td>x20</td>
            <td>Retangular</td>
            <td>Plástico 1</td>
            <td>$20,00</td>
          </tr>
          <tr>
            <td>Embalagens</td>
            <td>x10</td>
            <td>Quadrado</td>
            <td>Plástico 2</td>
            <td>$15,00</td>
          </tr>
          <tr>
            <td>Potes</td>
            <td>x15</td>
            <td>Shulambs</td>
            <td>Plástico 1</td>
            <td>$15,00</td>
          </tr>
        </tbody>
      </table>
    </div>
	  
				<div class="imagem">
					<div class="prox noSelect" onclick="proximaImg(8)"><span> &gt </span></div>
					<div class="ant noSelect" onclick="imgAnterior(8)"><span> &lt </span></div>
				</div>
        
        <div class="opcoesProduto">
        <a class="waves-effect waves-light btn"><i class="material-icons left">chat</i>Entrar em contato</a>
      </div>

				</div>
		
		
		</div>
  	</div>


    <div id="modal1" class="modal">
      <h1>Cancelando pedido</h1>
      <p>Tem certeza de que deseja cancelar o pedido?<p>
        <p>Esta ação não pode ser desfeita</p><br><br>
        <div>
        <a class="waves-effect waves-light btn modal-action modal-close">Voltar</a>
        <a class="waves-effect waves-light btn red darken-4 modal-action modal-close"><i class="material-icons left">cancel</i>Cancelar pedido</a>
      </div>
    </div>

	</body>

	<style>
			#tab2 > tbody > tr:hover {
				background-color: rgba(	15, 65, 60, .4) !important;
			}
	</style>
	
</html>