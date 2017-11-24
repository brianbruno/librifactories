$(document).ready(function () {
    $('#carregamento').hide();
    $('#aCriarConta').hide();
    $('.modal').modal();
    $("#cont2").fadeTo(0, 0);
    $("#cont2").hide();
    $("#corpo").hide();
    $(".button-collapse").sideNav();
    $('select').material_select();
    //VERIFICAR COOKIE PARA ENTRAR NA TELA DO USUÁRIO LOGADO
    var user = getCookie('usuariologado');
    var senha = getCookie('senha');
    if (user != "" && senha != "") login(user, senha);
    else $('#containerLogin').show();

    $("#input-senha").keypress(function (e) {
        if (e.which == 13) {
            fazerLogin();
        }
    });
    
    $("#criarConta").click(function(){
        $("#dLogin").slideUp(500);
        setTimeout(function(){
        $("#mae").slideDown(500);     
        }, 500)
    });

    $("#input-usuario").keyup(function (e) {
        if (e.which === 13) {
            fazerLogin();
        } else if ($("#input-usuario").val() === "DarkSider")
            mudarImagemUsuario("IMG-20171005-WA0014.jpg", "#user1", "LUCAS");
        else if ($("#input-usuario").val() === "PinkTree")
            mudarImagemUsuario("isabela.jpg", "#user1", "ISABELA");
        else if ($("#input-usuario").val() === "Badaro15Br")
            mudarImagemUsuario("badaro.jpg", "#user1", "RAFAEL");
        else if ($("#input-usuario").val() === "ControlePedidos")
            mudarImagemUsuario("IMG-20171005-WA0014.jpg", "#user2", "LUCAS");
        else if ($("#input-usuario").val() === "ControleEstoque")
            mudarImagemUsuario("igor.jpg", "#user2", "IGOR");
        else if ($("#input-usuario").val() === "AprovarEncomendas")
            mudarImagemUsuario("brian.jpg", "#user2", "BRIAN");
        else if ($("#user1").val() !== "CLIENTE") {
            $("#user1 > .imagem-usuario").css("background", "url('imagens/Icones/cliente.png')");
            $("#user1 > .imagem-usuario").css("background-size", "100% 100%");
            $("#user1 > .imagem-usuario").css("background-repeat", "no-repeat");
            $("#user1 > .nome-usuario").html("CLIENTE");
            $("#user2 > .imagem-usuario").css("background", "url('imagens/Icones/funcionario.png')");
            $("#user2 > .imagem-usuario").css("background-size", "100% 100%");
            $("#user2 > .imagem-usuario").css("background-repeat", "no-repeat");
            $("#user2 > .nome-usuario").html("FUNCIONÁRIO");
        }
    });

    function mudarImagemUsuario(imagem, div, nome) {
        $(div + " > .imagem-usuario").css("background", "url('imagens/Usuarios/" + imagem + "')")
        $(div + " > .imagem-usuario").css("background-size", "100% 100%");
        $(div + " > .imagem-usuario").css("background-repeat", "no-repeat");
        $(div + " > .nome-usuario").html(nome);
    }

    $('#user1').click(function () {
        $('#user2').hide(400);
        $('#aCriarConta').show();
        tipoUsuario = 1;
    });

    $('#voltar').click(function () {
        $('#voltar').hide(200);
        $('#div-senha').hide(200);
        setTimeout(function () {
            $('#user1').show(200);
            $('#user2').show(200);
        }, 200);
        tipoUsuario = 0;
        fazendoLogin = false;
        $('#aCriarConta').hide();
        $("#user1 > .imagem-usuario").css("background", "url('imagens/Icones/cliente.png')");
        $("#user1 > .imagem-usuario").css("background-size", "100% 100%");
        $("#user1 > .imagem-usuario").css("background-repeat", "no-repeat");
        $("#user1 > .nome-usuario").html("CLIENTE");
        $("#user2 > .imagem-usuario").css("background", "url('imagens/Icones/funcionario.png')");
        $("#user2 > .imagem-usuario").css("background-size", "100% 100%");
        $("#user2 > .imagem-usuario").css("background-repeat", "no-repeat");
        $("#user2 > .nome-usuario").html("FUNCIONÁRIO");
        $('#input-usuario').val("");
        $('#input-senha').val("");
    });



    $('#user2').click(function () {
        $('#user1').hide(400);
        tipoUsuario = 2;
    });

    $('.usuario').click(function () {
        if (!fazendoLogin) {
            fazendoLogin = true;
            $('#voltar').show(400);
            setTimeout(function () {
                $('#div-senha').show();
                $('#div-senha').fadeTo(1, 1);
                setTimeout(function () {
                    $('#input-usuario').focus();
                }, 50);
            }, 400);
        }
    });
});


var fazendoLogin = false;
var usuarioLogado = {
    usuario: "",
    senha: "",
    tipo: "",
    nome: ""
};

var tipoUsuario = 0;

var focus = {
    "user": false,
    "pass": false
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

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

function login(usuario, senha, tipo) {
    var lh = 'http://127.0.0.1:880?usuario=' + usuario + '&senha=' + senha + '&operacao=realizarLogin';
    $.ajax({
        url: lh,
        success: function (result) {
            if (result != null) {
                usuarioLogado = result;
                switch (usuarioLogado.tipo) {
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
                        $("#mobile-demo").html($("#nav-mobile-empresa").html());
                        document.title = 'Controle Estoque';
                        break;
                }
            }
        }
    });
}

function fazerLogin() {
    var lh = 'http://127.0.0.1:880?usuario=' + $('#input-usuario').val() + '&senha=' + $('#input-senha').val() + '&operacao=realizarLogin';
    $.ajax({
        url: lh,
        success: function (result) {
            if (result != null) {
                document.cookie = "usuariologado=" + result.usuario;
                document.cookie = "senha=" + result.senha;

                usuarioLogado = {
                    usuario: result.usuario,
                    senha: result.senha,
                    tipo: result.tipo,
                    nome: result.nome
                };

                if (usuarioLogado.tipo.startsWith(tipoUsuario)) {

                    $("#titulo").html("Efetuando login");
                    $("#nav-mobile-meuspedidos").show(200);
                    $("#mobile-demo").html($("#nav-mobile-meuspedidos").html());
                    $("#containerLogin").fadeTo(500, 0);
                    setTimeout(function () {
                        $("#containerLogin").hide();
                    }, 500);
                    $("#carregamento").addClass("active");
                    $('#carregamento').show();
                    $("#carr").removeClass("inativo");

                    setTimeout(function () {
                        switch (result.tipo) {
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
                                $('#cont2').html('');
                                $('#cont2').hide();
                                $('#corpo').load('source/empresa/controleEstoque.html');
                                $('#corpo').show();
                                $('#titulo').html('Controle estoque');
                                $("#nav-mobile-cliente").hide(0);
                                $("#nav-mobile-empresa").show(200);
                                $("#mobile-demo").html($("#nav-mobile-empresa").html());
                                document.title = 'Controle Estoque';
                                break;
                        }
                        if (result.tipo != "2-ControleEstoque") $("#cont2").fadeTo(200, 0.3);
                    }, 500);


                    setTimeout(function () {
                        $("#carregamento").addClass("inativo");
                        $("#carregamento").removeClass("active");
                        //AVISO!!!
                        //GAMBIARRA NOS IFs ABAIXO
                        //FAVOR NÃO JULGAR
                        //FAVOR NÃO TENTAR CORRIGIR
                        //LUCAS AGRADECE A COMPREENSÃO <3
                        if (result.tipo != "2-ControleEstoque") {
                            $("#cont2").fadeTo(100, 1);
                            telaCarregada();
                        }
                    }, 2000);
                } else {
                    var $toastContent = $('<span>Sinto muito, ó respeitável usuário, porém este servidor informa que seu login ou senha estão incorretos :( </span>').add($('<button class="btn-flat toast-action" onclick="t.remove()">Ok :/</button>'));
                    Materialize.toast($toastContent, 5000);
                }
            }
        },
        error: function (a, b, c) {
            var $toastContent = $('<span>Sinto muito, ó respeitável usuário, porém este servidor informa que seu login ou senha estão incorretos :( </span>').add($('<button class="btn-flat toast-action" onclick="t.remove()">Ok :/</button>'));
            Materialize.toast($toastContent, 5000);
        }
    });
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
        $("#mobile-demo").html($("#nav-mobile-cliente").html());
    } else {
        $("#nav-mobile-cliente").hide(0);
        $("#nav-mobile-empresa").show(200);
        $("#mobile-demo").html($("#nav-mobile-empresa").html());
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

