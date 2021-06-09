/* Funcionalidades */

/* Full Banner */
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    paginationClickable: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: 5000,
    autoplayDisableOnInteraction: false
});

/* Notícias */
var swiper = new Swiper('.noticias', {
    pagination: '.passagem.swiper-pagination',
    autoplay: 8000,
    nextButton: '.swiper-noticias-next',
    prevButton: '.swiper-noticias-prev',
    slidesPerView: 4,
    paginationClickable: true,
    spaceBetween: 30,
    loop: true

});

/* Cursos - Listas gerais */
var swiper = new Swiper('.lista-passagem', {
    pagination: '.passagem.swiper-pagination',
    autoplay: 8000,
    nextButton: '.swiper-noticias-next',
    prevButton: '.swiper-noticias-prev',
    slidesPerView: 'auto',
    spaceBetween: 0,
    paginationClickable: true,
    loop: false
});

/* Botões hover */

$('.bt-next').hover(function () {
    $(this).toggleClass('active-orange');
});
$('.bt-prev').hover(function () {
    $(this).toggleClass('active-orange');
});

//Newsletter
$('.btn-newsletter').click(function () {
    var abrir = $(this).attr('data-href');
    $(abrir).toggleClass('at');
});

/* Menu Princial */
var ativo = $('#menu-principal').attr('data-ativar');
$('li:nth-child(' + ativo + ') a', '#menu-principal').addClass('at');

var ativoM = $('.botoes_interna').attr('data-ativar');
$('div.botoes_interna').find('li a#'+ativoM).addClass('at');


/* Abrir e Fechar */
$('.btn-af').click(function () {
    var abrir = $(this).attr('href');
    $(abrir).toggleClass('at');
    return false;
});


/* Vídeos */
var swiper = new Swiper('.videos', {
    pagination: '.passagem.swiper-pagination',
    autoplay: 10000,
    nextButton: '.swiper-videos-next',
    prevButton: '.swiper-videos-prev',
    slidesPerView: 4,
    paginationClickable: true,
    spaceBetween: 30,
    loop: true

});

///

var Modal = $('.modal');
$(".play").on("click", function (e) {
    e.preventDefault();
    /*$('body').before('.modal');*/
    $(Modal).toggleClass('modal-show');
});
$(".overlay").on("click", function () {
    $(Modal).toggleClass('modal-show');
});

$(".mobile-close").on("click", function () {
    $(Modal).toggleClass('modal-show');
    $('.modal-body').empty();

});

$('li a').click(function () {
    var id = this.id;
    $('.modal-texto').after().html($(this).text());
    $('.modal-body').html("<object width='100%' height='450' data='http://www.youtube.com/embed/" + id + "?autoplay=1'></object>");
});
$('.modal-body, .modal-texto,.modal-header,.modal_contents').addClass('pb');

/* Adiciona a classe grayscale */
$('img.bt-pb').on('click','',function(){
    $('.modal-body, .modal-texto,.modal-header,.modal_contents').toggleClass('pb');
});
$('.teste').hover(function(){
    $('').addClass('play-hover');
});

$('.revista-one').on('click','',function(e){
    $('.exibe-01').slideToggle();
});

// Filtro só primeiro 8 revistas
$('.capa_').each(function (index, value) {
    if(index > 7){
        $(this).addClass('apper');
    }
});
$('.capa_:eq(7)').after('<button id="exibir"> Edi&ccedil;&otilde;es Anteriores</button>');
$('.capa_:eq(0)').find('img').addClass('destaque');
$('#exibir').click(function(){
    este = $(".apper");
    este.fadeToggle('fade');
});

