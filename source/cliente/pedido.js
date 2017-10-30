$(document).ready(function() {
    $('select').material_select();
  });
  $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });  
  $(document).ready(function(){    
    $('.modal').modal();
  }); 
  
function clicouBotao() {
	if (valida() == true) {
		alert("Compra realizada");
	}
} 

function valida()
{    
    for (let i = 0; i < 5; i++) {
		if (document.getElementsByTagName("select")[i].selectedIndex == "") {
			Materialize.toast('Preencha todos os campos!', 4000);
			return false;
		}
	}
	return true;
}

function adicionar(){
	var tipoEmbalagem = $("#tipoEmbalagem").val();
	var corEmbalagem = $("#corEmbalagem").val();
	var tipoTampa = $("#tipoTampa").val();
	var corTampa = $("#corTampa").val();
	var materialDesejado = $("#materialDesejado").val();
	var quantidade = $("#quantidade").val();	
	
	var item = {tipoEmbalagem: tipoEmbalagem,
				corEmbalagem: corEmbalagem,
				tipoTampa: tipoTampa,
				corTampa: corTampa,
				materialDesejado: materialDesejado,
				quantidade: quantidade
	}	
	item.tipoEmbalagem;
	$.ajax({
		type: "POST",
		url: "localhost",
		data: item,
		dataType: "json",
		success: function(result){
			$("#div1").html(result);
	    }
	});
	
				
}



function exibe(){
	
	$("#carrinho").html('');
	
	var valorTotal = 0.00;
	
	$.ajax({
		type: "POST",
		url: "http://127.0.0.1:880?usuario=" + getCookie('usuariologado') + "&senha=" + getCookie('senha') + "&operacao=listarItensCarrinho",
		dataType: "json",
		success: function(result){			
			for(i = 0; i < result.length; i++){	
				var campoTipoEmbalagem = "<tr><td>" + result[i].produto.nome + "</td>";
				var campoQuantidade = "<td><input value='" + result[i].quantidade + "' style='text-align: center' class='validate' min='50' max='200' step='10'></td>" ;
				var campoCorTampa = "<td>"+result[i].produto.corTampa+"</td>";
				var campoCorEmbalagem = "<td>"+result[i].produto.corEmbalagem+"</td>";
				var campoPreco = "<td>"+result[i].produto.preco+"</td>";
				var campoExcluir = "<td><i class='small material-icons'>delete_forever</i><td></tr>";	
				$("#carrinho").append(campoTipoEmbalagem + campoQuantidade + campoCorTampa + campoCorEmbalagem + campoPreco + campoExcluir );
				valorTotal += result[i].quantidade * result[i].produto.preco;
				$("#valorTotal").html(valorTotal);
				
			}		
			
	    }
	});
	
}