$(document).ready(function () {
    $('.modal').modal();
    $("#cont2").fadeTo(0, 0);
    $("#cont2").hide();
    $("#corpo").hide();
    $(".button-collapse").sideNav();
    $('select').material_select();
    //VERIFICAR COOKIE PARA ENTRAR NA TELA DO USUÁRIO LOGADO
    for (let i = 0; i < 5; i++) {
        if (document.cookie == "usuariologado=" + contas[i].user) {
            switch (contas[i].tipo) {
                    case "1":
                        $("#containerLogin").hide();
                        chamarTela('source/cliente/meuspedidos.html', 'Meus Pedidos');
                        break;
                    case "2-ControlePedidos":
                        $("#containerLogin").hide();
                        chamarTela('source/empresa/controlepedidos.html', 'Controle Pedidos');
                        break;
                    case "2-AprovarEncomenda":
                        $("#containerLogin").hide();
                        chamarTela('source/empresa/aprovarencomenda.html', 'Aprovar Encomenda');
                        break;
                    case "2-ControleEstoque":
                        $("#containerLogin").hide();
                        $('#corpo').load('source/empresa/controleEstoque.html');
                        $('#corpo').show();
                        $('#cont2').html('');
                        $('#titulo').html('Controle estoque');
                        $("#nav-mobile-cliente").hide(0);
                        $("#nav-mobile-empresa").show(200);
                        document.title = 'Controle Estoque';
                        break;
                }
        }
    }
    
    //
    document.getElementById('user').addEventListener("focus", focusUser);
    document.getElementById('pass').addEventListener("focus", focusSenha);
    document.getElementById('user').addEventListener("focusout", outfocusUser);
    document.getElementById('pass').addEventListener("focusout", outfocusSenha);

    $("#pass").keypress(function (e) {
        if (e.which == 13) {
            fazerLogin();
        }
    });

    $("#user").keypress(function (e) {
        if (e.which == 13) {
            fazerLogin();
        }
    });
});

var focus = {
    "user": false,
    "pass": false
}

var contas = [
    {
        "user": "DarkPink",
        "pass": "Arvore",
        "nome": "Lucas / Isabela",
        "tipo": "1"
    },
    {
        "user": "AprovarEncomenda",
        "pass": "123",
        "nome": "Brian",
        "tipo": "2-AprovarEncomenda"
    },
    {
        "user": "ControleEstoque",
        "pass": "123",
        "nome": "Igor",
        "tipo": "2-ControleEstoque"
    },
    {
        "user": "ControlePedidos",
        "pass": "123",
        "nome": "Lucas",
        "tipo": "2-ControlePedidos"
    },
    {
        "user": "Relatórios",
        "pass": "123",
        "nome": "Lucas",
        "tipo": "2-Relatórios"
    }
    ]

function outfocusUser() {
    focus.user = false;
    checkFocus();
}

function outfocusSenha() {
    focus.pass = false;
    checkFocus();
}

function focusUser() {
    focus.user = true;
    checkFocus();
}

function focusSenha() {
    focus.pass = true;
    checkFocus();
}

function fazerLogin() {
    for (let conta in contas) {
        if (contas[conta].tipo.startsWith(document.getElementsByTagName("select")[0].value) && $("#user").val() == contas[conta].user && $("#pass").val() == contas[conta].pass) {
            //var stateObj = { foo: "index" };
            //history.pushState(stateObj, "page 2", "meuspedidos");
            document.cookie = "usuariologado=" + contas[conta].user + ";";
            $("#titulo").html("Efetuando login");
            $("#nav-mobile-meuspedidos").show(200);
            $("#containerLogin").fadeTo(500, 0);
            setTimeout(function () {
                $("#containerLogin").hide();
            }, 500);
            $("#carregamento").addClass("active");
            $("#carr").removeClass("inativo");

            setTimeout(function () {
                switch (contas[conta].tipo) {
                    case "1":
                        chamarTela('source/cliente/meuspedidos.html', 'Meus Pedidos');
                        break;
                    case "2-ControlePedidos":
                        chamarTela('source/empresa/controlepedidos.html', 'Controle Pedidos');
                        break;
                    case "2-AprovarEncomenda":
                        chamarTela('source/empresa/aprovarencomenda.html', 'Aprovar Encomenda');
                        break;
                    case "2-ControleEstoque":
                        $('#corpo').load('source/empresa/controleEstoque.html');
                        $('#corpo').show();
                        $('#cont2').html('');
                        $('#titulo').html('Controle estoque');
                        $("#nav-mobile-cliente").hide(0);
                        $("#nav-mobile-empresa").show(200);
                        document.title = 'Controle Estoque';
                        break;
                }
                $("#cont2").fadeTo(200, 0.3);
            }, 500);


            setTimeout(function () {
                $("#carregamento").addClass("inativo");
                $("#carregamento").removeClass("active");
                //AVISO!!!
                //GAMBIARRA NOS IFs ABAIXO
                //FAVOR NÃO JULGAR
                //FAVOR NÃO TENTAR CORRIGIR
                //LUCAS AGRADECE A COMPREENSÃO <3
                if (contas[conta].tipo != "2-ControleEstoque") $("#cont2").fadeTo(100, 1);
                else $('#cont2').hide();
                if (contas[conta].tipo != "2-ControleEstoque") telaCarregada();
            }, 2000);
            return;
        }
    }
    var $toastContent = $('<span>Sinto muito, ó respeitável cliente, porém este servidor informa que seu login ou senha estão incorretos :(</span>').add($('<button class="btn-flat toast-action" onclick="t.remove()">Ok :(</button>'));
    Materialize.toast($toastContent, 5000);
}

function chamarTela(pagina, menu) {
    $("#cont2").show();
    $('#cont2').html('');
    $("#cont2").load(pagina);
    $("#titulo").html(menu);
    $("#cont2").fadeTo(200, 1);
    $("#corpo").html('');
    $("#corpo").hide();
    if (menu == "Meus Pedidos" || menu == "Orçamento" || menu == "Novo Pedido") {
        $("#nav-mobile-empresa").hide(0);
        $("#nav-mobile-cliente").show(200);
    } else {
        $("#nav-mobile-cliente").hide(0);
        $("#nav-mobile-empresa").show(200);
    }
    setTimeout(function () {
        document.title = "Libri - " + menu;
        telaCarregada();
    }, 200);
}

function checkFocus() {
    if (!focus.user && !focus.pass) {
        document.getElementById('divUser').className = "input-field col s6";
        document.getElementById('divSenha').className = "input-field col s6";
    }
    if (focus.user) {
        document.getElementById('divUser').className = "input-field col s8";
        document.getElementById('divSenha').className = "input-field col s4";
    }
    if (focus.pass) {
        document.getElementById('divUser').className = "input-field col s4";
        document.getElementById('divSenha').className = "input-field col s8";
    }
}
