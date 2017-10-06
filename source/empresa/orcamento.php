<DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>      
<style>
h2{
    font-size: 35px;
    margin: 12px;
 }
img{
         position: absolute;
        right: 0px;
        width:150px;
        height:140px;
    }
    h3,h4{
        font-size:20px;
	margin: 12px;
    }
	#errado{
		margin: 12px;
}
    #confirma{ 
		position: static;
		display: inline-block;
		float: right;
		margin-right: 10px;
}
    #modifica{
		position: static;
		display: inline-block;
		float: right;
		margin-right: 10px;
          
}
    .linha{
          border-bottom: 6px solid grey;
          margin: auto;
          width: 100%;
}
</style>
    <h1>
        <center>
        Valor do orçamento
        </center>
        </h1>
    </head>
<body>
<div class="container">
    <!--Linha1--> 
    <div class="linha">
    </div>
    <div class="row">
    <h2>
        Itens do pedido:
        <img src="imagens/librifactories.jpg">
        </h2>
    </div>
 <!--Lista do pedido -->    
    <!--Lista do pedido -->
  <div class="col s12 m4 l8">
 <table style="height: 5px; width: 574px;" class="bordered">
 <thead>
	<tr>
	<th style="width: 221px;">Nome</th>
	<th style="width: 301px;">Quantidade</th>
	<th style="width: 400px;">Preço</th>
	</tr>
</thead>
   <tbody>
	<tr>
	  <td style="width: 221px;">Plastico</td>
	  <td style="width: 301px;">20</td>
	  <td style="width: 400px;">$15,00</td>
     </tr>
	<tr>
	  <td style="width: 221px;">Compartimento</td>
	  <td style="width: 301px;">250</td>
	  <td style="width: 400px;">$150,00</td>
     </tr>
   </tbody>
 </table>
</div>
<!--Linha2-->    
    <div class="linha">
    </div>
<!--Estimativa e entrega -->    
 <div class="row">
    <h3>
        Estimativa de preço:
     </h3>
     <h4>
         Prazo de entrega:
     </h4>
    </div>
 <!--Footer -->   
    
    <div class="row">
        
    <button type="button" class="waves-effect waves-light btn" id="errado">Algo de errado?</button>
        
    <button type="button" class="waves-effect waves-light btn" id="modifica" c>Modificar pedido</button>    
    <button type="button"  class="waves-effect waves-light btn" id="confirma" >Confirmar pedido</button> 
 
    </div>   
</div>
 </body>      
</html>
