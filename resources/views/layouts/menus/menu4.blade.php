
<style type="text/css">
<style>
* {
    margin: 0;
    padding: 0;
}

header{
    width: 80%;
    height: 43px;
    top:63px;
    left:0 ;
    background-color: #5b859a;
    position: fixed;
    margin-left: 55px;
    text-align: center;

}

.menu-icon{
    margin-left: 22px;
   /* position: fixed; */
    font-size: 25px;
    font-weight: bold;
    padding: 4px;
    width: 40px;
    text-align: center;
    background-color: #5b859a;
    color #fff;
    cursor: pointer;
    transition: all .4s;
    left:300px;
    top:5;


}
.menu-icon:hover{

    background-color: #fff;
    color: #5b859a;
}
#chk{
   /* position: absolute; */
    display: none;
}
.menu{
    height: 90%;
    position: fixed;
    background-color: #222;
    top:110px;
    overflow: hidden;
    transition: all .2s
}
#principal{
    width: 300px;
    left: -300px;
}
ul{
    list-style: none;

}
ul li a{
  display: block;
  font-size: 18px;
  fonte-family: 'Arial';
  padding: 10px;
  border-bottom: solid 1px #000;
  color: #ccc;
  text-decoration: none;
  transition: all .2s;

}

ul li span{
  float: right;
  padding-right:  10px;

}
ul li a:hover{
    background-color: #5b859a;
}

.voltar{

    margin-top: 60px;
    background-color:   #111;
    border-left: solid 5px #444;
}
.bg{
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    position: fixed;
    background-color: rgb(0,0,0, .6);
    display: none;

}

#chk:checked ~bg{
    display: block;

}
#chk:checked ~ #principal{
    transform: translateX(300px);

}

#produtos,#funcionais{
    width: 250px;
    left: -250px;
}
#produtos:target,#funcionais:target{
  transform: translateX(250px);
  box-shadow: 2px, 2px, 5px, 2px rgba(0,0,0,.5);
}


</style>



<header>
    {{-- <div  id="spanbtn" class="col-12">   offset-2 col-sm-8 offset-2 col-xs-12">

        <span id="spanbtn" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776</span> --}}

         <a href="#">pedido</a>
         <a href="#" id="menuoperacional">Nota Fiscal</a>
         <a href="#" id="menuoperacional">Funcionário</a>
         <a href="#" id="menuoperacional">teste</a>
         <a href="#" id="menuoperacional">Produtos</a>

    {{--   </div> --}}

</header>

<input type="checkbox" id="chk">
<label for="chk" class="menu-icon">&#9776;</label>


< class="bg"></>

<nav class="menu" id="principal">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        <li><a href="#" class="voltar">Voltar</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Fornecedores</a></li>
        <li><a href="#produtos">Produtos<span>+</span> </a></li>
        <li><a href="#">Usarios</a></li>
        <li><a href="#funcionais">funcionais<span>+</span> </a></li>
    </ul>

</nav>
<nav class="menu" id="produtos">
    <ul>
        <li><a href="#" class="voltar">Voltar</a></li>
        <li><a href="#">Grupos</a></li>
        <li><a href="#">Tipos</a></li>
    </ul>
</nav>
<nav class="menu" id="funcionais">
    <ul>
        <li><a href="#" class="voltar">Voltar</a></li>
        <li><a href="#">Empresa</a></li>
        <li><a href="#">Configuracoes</a></li>
    </ul>
</nav>

