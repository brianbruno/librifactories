<DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>      
<style>
body {
    background-image: url("https://files.slack.com/files-tmb/T6WGP2WAU-F77TSB5QD-9191f5efb3/fundo_720.jpg");  
}
h2{
    font-size: 35px;
    margin: 12px;
 }
img{
    position: static;
    display: inline-block;
    float: right;
    margin-right: 0;
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
    #modifica{
		position: static;
		display: inline-block;
		float: right;
		margin-right: 10px;
		margin-top: 12px;
          
}
    #confirma{ 
		position: static;
		display: inline-block;
		float: right;
		margin-right: 10px;
		margin-top: 12px;
}
    .linha{
          border-bottom: 6px solid grey;
          margin: auto;
          width: 100%;
}
    table {
        display: inline-block;
    }
    
    .tabela {
    }
    
.container {
    position: relative;
	margin-top: 20px;
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 220px;
    overflow: hidden;
}
</style>
    </head>
<body>
<div class="container">
    <h1>
        <center>
        Valor do orçamento
        </center>
        </h1>
    <!--Linha1--> 
    <div class="linha"></div>
    <div class="row">
    <h2>
        Itens do pedido:
        </h2>
    </div>
 <!--Lista do pedido -->    
    <!--Lista do pedido -->
  <div class="col s12 m4 l8 tabela">
        <img src="source/empresa/libri.jpg">
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
    
    <div class="linha"></div>
    <div class="row">
        
    <button type="button" class="waves-effect waves-light btn" id="errado">Algo de errado?</button>
         
    <button type="button"  class="waves-effect waves-light btn" id="confirma" >Confirmar pedido</button> 
    <button type="button" class="waves-effect waves-light btn" id="modifica">Modificar pedido</button>   
 
    </div>   
</div>
 </body>      
</html>
