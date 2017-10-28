var data = {
    "itens": [
        {
            "cod": "103285",
            "item": [
                {
                    "nome": "5 Kg de Propietileno",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "5 unidades de impressora",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "5 gramas de fermento",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "5 unidades de celular",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "5 gramas",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                }
            ],
            "valortotal": "2500.32",
            "datapedido": "12/09/2017",
            "aprovado": false
            },
        {
            "cod": "103284",
            "item": [
                {
                    "nome": "10 Kg de Propietileno",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "10 unidades de impressora",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "10 gramas de fermento",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                }
            ],
            "valortotal": "380.20",
            "datapedido": "15/09/2017",
            "aprovado": false
            },
        {
            "cod": "103283",
            "item": [
                {
                    "nome": "15 Kg de Propietileno",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "15 unidades de impressora",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "15 gramas de fermento",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                }
            ],
            "valortotal": "30.08",
            "datapedido": "20/09/2017",
            "aprovado": false
            },
        {
            "cod": "103282",
             "item": [
                {
                    "nome": "20 Kg de Propietileno",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "20 unidades de impressora",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                },
                {
                    "nome": "20 gramas de fermento",
                    "quantidade": 5,
                    "valortotal": 250.32,
                    "aprovado": false
                }
            ],
            "valortotal": "800.99",
            "datapedido": "30/08/2017",
            "aprovado": false
            }
        ]

};

$(document).ready(function () {
    atualizarTabelaPedidosPendentes(data);
});

function atualizarTabelaPedidosPendentes (data){
    var tbPedidosPendentes = $("#tbPedidosPendentes");
    tbPedidosPendentes.html("");
    for (var i = 0; i<data.itens.length; i++) {
        tbPedidosPendentes.append('<tr class="itemTabela"><td>' +data.itens[i].cod+'</td><td>' +data.itens[i].datapedido +'</td><td>R$ ' + data.itens[i].valortotal + '</td><td><a onClick="montaModalVerItens('+ i +')" class="waves-effect waves-light btn">Ver informações</a></td></tr>');
    }
}

function montaModalVerItens(item) {
    var icon;
    var itensModal = $('#itensModal');
    var codPedido = $('#codpedido');
    itensModal.html("");
    codPedido.html(data.itens[item].cod);

    for (i = 0; i<data.itens[item].item.length; i++) {
        if(data.itens[item].item[i].aprovado){
            icon = '<i class="material-icons circle green" onClick="trocaAprovado('+item+','+i+')">check</i>';
        } else {
            icon = '<i class="material-icons circle red" onClick="trocaAprovado('+item+','+i+')">close</i>';
        }
        itensModal.append('<li class="collection-item avatar"><div id="iconModal'+i+'">' + icon + '</div><span class="title"><h5>' + data.itens[item].item[i].nome + '</h5></span><p>Preço estimado: R$ ' + data.itens[item].item[i].valortotal + '</p></li>');
    }
    alteraBotoes(item);
    $('.modal').modal();
    $('#veritens').modal('open');
}

function trocaAprovado(item, i){
    if(data.itens[item].item[i].aprovado){
        data.itens[item].item[i].aprovado = false;
        $('#iconModal'+i).html('<i class="material-icons circle red" onClick="trocaAprovado('+item+','+i+')">close</i>');
    } else {
        data.itens[item].item[i].aprovado = true;
        $('#iconModal'+i).html('<i class="material-icons circle green" onClick="trocaAprovado('+item+','+i+')">check</i>');
    }
    alteraBotoes(item);
    //montaModalVerItens(item);
}

function alteraBotoes(item){
    var reprovados=0;
    for (i = 0; i<data.itens[item].item.length; i++) {
        if(!data.itens[item].item[i].aprovado){
            reprovados=reprovados+1;
        }
    }
    if(reprovados>0){
       $('#confirmaModal').html('<a href="#!" class="modal-action modal-close waves-effect waves-yellow btn orange darken-4">Enviar para análise</a>');
    } else {
        $('#confirmaModal').html('<a href="#!" class="modal-action modal-close waves-effect waves-green btn light-green darken-4">Aprovar</a>');
    }
}

function telaCarregada() {
    getData();

    var tabs = $('ul.tabs');

    atualizarTabelaPedidosPendentes(data);
    tabs.tabs({
        swipeable: false,
        responsiveThreshold: 1920
    });
    tabs.tabs('select_tab', 'pedidosPendentes');
}
function getData() {
    $.ajax({
        type: "POST",
        url: "http://librifactories.com:880/listarProdutos",
        dataType: "json",
        success: function(dados) {
            for (i = 0; i < dados.id.length; i++) {
                $('#itenscad').append("<tr><td>" + dados.nome[i] + "</td><td>" + dados.valor[i] + "</td></tr>");
            }
        },
        error: function () {
            Materialize.toast('Não foi possível recuperar seus dados. Info: ', 3000, 'rounded');
        }
    });
}