$( document ).ready(function() {
    //Carrega tela inicial
    trocaCorpo("source/cliente/inicio.php");
});


function trocaCorpo(tela) {
    $("#corpo").load(tela, function () {
        $('.carousel').carousel();
        $('.carousel.carousel-slider').carousel({fullWidth: true});
        console.log("Pagina carregada");     
    });
}