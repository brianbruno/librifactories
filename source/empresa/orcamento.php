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
    margin: 50px;
 }
 ul{
        font-size: 17px;
    }
img{
         position: absolute;
        right: 0px;
        width:150px;
        height:140px;
    }
    h3,h4{
        font-size:20px;
        margin: 50px;
    }
    #errado { 
    position: absolute;
    left: 50px;
}
    #confirma{
         position: absolute;
         right: 70px;   
}
    #modifica{
         position: absolute;
        right: 300px;   
}
    .linha{
          border-bottom: 6px solid grey;
          margin: auto;
          width: 93%;
}
</style>
    <h1>
        <center>
        Valor do orçamento
        </center>
        </h1>
    </head>
<body>
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
    <div class="container">
     <ul>
  <li> 
    <div class="input-field inline">
    <input id="quant"  class="validate">
    <label>Quantidade</label>
     </div>
      Nome do item
 </li>
 <li> 
    <div class="input-field inline">
    <input id="quant"  class="validate">
    <label>Quantidade</label>
     </div>
     Nome do item
 </li>
<li> 
    <div class="input-field inline">
    <input id="quant"  class="validate">
    <label>Quantidade</label>
     </div>
      Nome do item
 </li>    
     </ul>  
         </div>
<!--Linha2-->    
    <div class="linha">
    </div>
<!--Estimativa e entrega -->    
 <div class="row">
    <h3>
        Estimativa de preço:
          <div class="input-field inline">
            <input id="preco">
              <label>Preco aqui</label>
          </div>
     </h3>
     <h4>
         Prazo de entrega:
          <div class="input-field inline">
            <input id="prazo">
              <label>Prazo aqui</label>
          </div>
     </h4>
    </div>
 <!--Footer -->   
    
    <div class="row">
        
    <button type="button" class="waves-effect waves-light btn" id="errado">Algo de errado?</button>
        
    <button type="button" class="waves-effect waves-light btn" id="modifica" c>Modificar pedido</button>    
    <button type="button"  class="waves-effect waves-light btn" id="confirma" >Confirmar pedido</button> 
 
    </div>   
 </body>      
</html>
