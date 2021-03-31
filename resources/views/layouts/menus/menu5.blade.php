<html>
<style type="text/css">

<style>
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}


.menuLateral{

    background-color: rgb(54, 49, 49);
    width: 250px;
    height: 100%;
    position: fixed;
    left: -250px;
}

.menuLateral .titulo{
    color: white;
    text-align: center;
    font-weight: bold;
    line-height: 40px;
    border-bottom: 2px solid red;
}
.menuLateral ul{
    list-style: none;
 }
 .menuLateral ul li{
    line-height: 30px;
    border-bottom: 1px solid red;
 }


.menuLateral ul li a{
   color: white;
   padding-left: 30px;
   font-weight: bold;
   display: block;
}

.menuLateral ul li a:hover{
    background-color: #370707;
    transition: 0.6s;
}

.menuLateral ul ul li a{
    font-size: 12px;
    font-weight: 300;
    padding-left: 60px;
    background-color: #131313;
}

.menuLateral ul ul{
    display: none;
}


.menuLateral ul .itemprodutos .mostra{

    display: block;
}
.menuLateral ul .itemfuncionais .mostra{

    display: block;
}
.menuLateral.abre{
    left: 0;
}
.btnAbre{
    cursor: pointer;
}
/* header{
    width: 95%;
    height: 43px;
    margin-top: 2px;
    margin-left:19px ;
    background-color: #5b859a;
/*    position: fixed; */

  /* text-align: center;

} */


</style>

<header>
    <label for="chk" class="btn-icon">&#9776;</label>
     <div id="botao">


            <a href="#">pedido</a>
            <a href="#" id="menuoperacional">Nota Fiscal</a>
            <a href="#" id="menuoperacional">Funcionário</a>
            <a href="#" id="menuoperacional">teste</a>
            <a href="#" id="menuoperacional">Produtos</a>

      </div>


</header>
<div class="btnAbre"><span class="material-icons">
    menu_open
    </span></div>
<nav class="menuLateral">
    <div class="titulo">Meu site<span class="material-icons">highlight_off</span></div>
        <ul>
            <li><a href="#">Voltar</a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Fornecedores</a></li>
            <li><a class="produtos" href="#">Produtos<span class="material-icons">arrow_right</span></a>
                <ul class="itemprodutos" >
                    <li><a href="#">Grupo</a></li>
                    <li><a href="#">Tipos</a></li>

                </ul>
            </li>
            <li><a href="#">Usarios</a></li>
            <li><a href="#" class="funcionais">funcionais<span class="material-icons">arrow_right</span></a>
                <ul class="itemfuncionais">
                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Configurações</a></li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
<script type="text/javascript" src="js/menujs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>

<script>
 /*  $(".produtos" ).click(function() {
        $( this ).slideUp();
    }); */
   $('.produtos').click(function() {
       echo('aquiffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff');
       $('menuLateral ul .itemprodutos').toggleClass('mostra');
    });

</script>

</html>
{{--
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggleClass("main");
  });
});
$('.produtos').click(function () {
    $('menuLateral ul .itemprodutos').toggleClass('mostra');
});
</script>
<style>
.main {
  font-size: 120%;
  color: red;
}
</style>
</head>
<body>

<button>Toggle class "main" for p elements</button>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<p><b>Note:</b> Click the button more than once to see the toggle effect.</p>

</body>
</html>
 --}}
