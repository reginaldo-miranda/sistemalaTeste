$(".produtos").click(function () {
    $('.menuLateral ul.itemprodutos').toggleClass('mostra');
});
$('.funcionais').click(function(){
  $('.menuLateral ul.itemfuncionais').toggleClass('mostra');
});
$( ".produtos" ).click(function() {
    $( this ).slideUp('mostra');
});
$('.btnAbre').click(function(){
  $('.menuLateral').toggleClass('abre');
});
