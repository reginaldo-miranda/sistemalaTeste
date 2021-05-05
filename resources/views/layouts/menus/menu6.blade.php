<html>
<style type="text/css">

<style>
* {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
header{
    width: 95%;
    height: 43px;
    margin-top: 2px;
    margin-left:45px ;
    background-color: #5b859a;
    position: fixed;

  /* text-align: center; */

}

.menuLateral{
    margin-top:55px;
    margin-left: 15px;
    background-color: #07293a;
    width: 250px;
    height: 400px;
    position: fixed; 
    left: -270px;
    transition: left 0.5s;

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
   text-decoration: none;
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


.menuLateral ul .itemprodutos.mostra{

    display: block;
}
.menuLateral ul.itemfuncionais.mostra{

    display: block;
}

.menuLateral ul li a span{
  position: absolute;
  font-size: 30px;
  right: 25px;
  transition: 0.4s;

}

.menuLateral ul li a span.gira{
    transform: rotate(90deg);
}
.menuLateral.abre{
    left: 0;
}
.btnAbre{
    position: absolute;
    top: 67px;
    left: 12px;
    height: 43px;
    border-radius: 1px;
    cursor: pointer;
    background-color: #5b859a;
    color: white;

}

.btnAbre span{
   font-size: 30px;

}
.btnFecha{
    position: relative;
    top: 6px;
    left: 15px;

}
.btnFecha:hover{
   color: #5b859a;
}

 /* ------------- menu horizonttal ----------------------------- */
.menuh{
    padding-left: 12px;
}
.menuh ul li{

    background-color: #5b859a;
    float: left;
    width: 200px;
    height: 35px;
    display: inline-block;
    text-align: center;
    line-height: 35px;
    position: relative;
}
.menuh ul li:hover{
    background-color: #4b1acf;
}
.menuh ul{
    padding: 0;
}
.menuh ul ul{
    display: none;
}
.menuh ul li:hover > ul{
    display: block;
}
.menuh ul ul ul{
    margin-left: 201px;
    top:0px;
    position: absolute;
}
.menuh a{
  color: white;
}
</style>

<header>
   <nav class="menuh">
     <div class="row">
        <ul>
            <li><a href="#">Venda</a>
                <ul>
                    <li><a href="#">Pdv</a></li>
                    <li><a href="#">Pedido</a>
                        <ul>
                            <li><a href="#">Pedido Venda</a></li>
                            <li><a href="#">Orcamento</a></li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li><a href="#" >Nota Fiscal</a></li>
            <li><a href="#" >P Compra</a></li>
            <li><a href="#" >Troca e devolução</a></li>
            <li><a href="#" >Consignação</a></li>
        </ul>
     </div>
   </nav>


</header>
<div class="btnAbre"><span class="material-icons">menu_open</span></div>
<nav class="menuLateral">

    <div class="titulo">Fechar<span class="material-icons btnFecha">highlight_off</span></div>
        <ul class="itemprodutos">
            <li><a href="#">Voltar</a></li>
            <li><a href="#">Clientes</a></li>
            <li><a href="#">Fornecedores</a></li>
            <li><a class="produtos" href="#">Produtos<span class="material-icons seta1">arrow_right</span></a>
                <ul class="itemprodutos" >
                    <li><a href="#">Produtos</a></li>
                    <li><a href="{{ route('grupo.index')}}">Grupo</a></li>
                    <li><a href="#">Tipos</a></li>
                </ul>
            </li>
            <li><a href="#">Usarios</a></li>
            <li><a href="#" class="funcionais">funcionais<span class="material-icons seta2">arrow_right</span></a>
                <ul class="itemfuncionais">
                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Configurações</a></li>
                </ul>
            </li>
            <li><a href="#" class="relatorios">Relatorios<span class="material-icons seta3">arrow_right</span></a>
                <ul class="itemrelatorios">
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Produtos</a></li>
                </ul>
            </li>
        </ul>

    </div>

</nav>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>

<script>

   $('.produtos').click(function() {
      $('.menuLateral ul .itemprodutos').toggleClass('mostra');
    });

    $('.btnAbre').click(function(){
        $('.menuLateral').toggleClass('abre');
    });


    $('.btnFecha').click(function(){
        $('.menuLateral').toggleClass('abre');
    });

    $('.funcionais').click(function(){
        $('.menuLateral ul.itemfuncionais').toggleClass('mostra');
      });

    $('.produtos').mouseover(function(){
        $('.menuLateral ul .seta1').toggleClass('gira');
    });

    $('.produtos').mouseout(function(){
        $('.menuLateral ul .seta1').toggleClass('gira');
    });

    $('.funcionais').mouseover(function(){
        $('.menuLateral ul .seta2').toggleClass('gira');
    });
    $('.funcionais').mouseout(function(){
        $('.menuLateral ul .seta2').toggleClass('gira');
    });
    const $menuLateral = $('.menuLateral');
    $(document).mouseup(e => {
        if(!$menuLateral.is(e.target) && $menuLateral.has(e.target).length === 0)
        {
            $menuLateral.removeClass('abre')
        }
    });

</script>


</html>
