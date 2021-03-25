
<style type="text/css">


    body {
      font-family: "Lato", sans-serif;
    }

   .sidenav {
      height: 70%;
      width: 0;
      position: relative;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: rgb(137, 197, 240);
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 40px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 13px;
    //  color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
     // color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }



    @media screen and (max-height: 250px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
        width: 220px;
    }

    ul li {
            position: relative;
    }

    li ul {
        position: absolute;
        left: 221px;
        top: 0;
        display: none;
        padding: 0;
     }
     ul li a {
        display: block;
        text-decoration: none;
        color: #5214e2;
        background: rgb(196, 193, 193);
        //padding: 0;
      //  border: 1px solid #ccc;
     }

     li:hover ul {
          display: block !important;
     }

    ul li a ul li a:houver{

        display: block;
    }
    ul li ul li:hover {background: rgb(200, 211, 214);}

    #menuoperacional{

        margin-left: 80px;

    }
    #spanbtn{
      margin-left: 30px;
      padding-right: 50px;

    }

    #espacomenu{

     padding:0 0 0 30px;

    }
    .row{
        background-color: rgb(200, 223, 240);
    }

    ul li ul li ul li {
        display: none;
    }

    ul li ul li ul li a ul li:hover{
        display: block;
    }




    </style>

  <div class="row">
      <div  id="spanbtn" class="col-md-12 offset-2 col-sm-8 offset-2 col-xs-12">

          <span id="spanbtn" style="font-size:30px ; cursor:pointer" onclick="openNav()"> &#9776; </span>

         {{--  <a href="{{ route('pedido.index') }}" id="menuoperacional">Pedido</a>  --}}
          <a href="#">pedido</a>
          <a href="#" id="menuoperacional">Nota Fiscal</a>
          <a href="#" id="menuoperacional">Funcionário</a>
          <a href="#">teste</a>
          <a href="#" id="menuoperacional">Produtos</a>
      </div>
    </div>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn"  style="font-size:25px" onclick="closeNav()">&times;</a>

        <ul>
          <li>
              <a href="#">cadastro</a>
              <ul>
                  <a>Cadastro</a>
                  <li><a id="espacomenu" href="#">Clientes</a></li>
                  <li><a id="espacomenu" href="#">Fornecedor</a></li>
                  <li><a id="espacomenu" href="#"{{--  {{ route('usuario.index') }} --}}>Usuario</a></li>
                  {{--  <><a id="espacomenu" href="{{ route('funcionario.index') }}">Funcionário</a></>
                  <li><a id="espacomenu" href="{{ route('usuario.index') }}">Usuario</a></li> --}}

                    <li id="espacomenu">
                       <a href="#">Porudtos</a>
                        <ul id="teste">
                          <li>grupos</li>
                          <li>tipo</li>
                        </ul>
                    </li>

               </ul>
          </li>
        </ul>

        <ul>
            <li>
                <a href="#">Relatorios</a>
                <ul>
                    <a>relatorios</a>
                    <li><a id="espacomenu" href="#">Clientes</a></li>
                    <li><a id="espacomenu" href="#">Fornecedor</a></li>
                    {{-- <li><a id="espacomenu" href="{{ route('funcionario.index') }}">Funcionario</a></li>
                    <li><a id="espacomenu" href="{{ route('usuario.index') }}">Usuario</a></li>
                    <li><a id="espacomenu" href="{{ route('produto.index') }}">Produtos</a></li>  --}}
                </ul>
            </li>
        </ul>

        <ul>
            <li>
                <a href="#">Cad Opercaionais</a>
                <ul>
                    <a>Outros Cadastros</a>
                    {{-- <li><a id="espacomenu" href="{{ route('empresa.index') }}">Empresa</a></li>
                    <li><a id="espacomenu" href="{{ route('formapgto.index') }}">cond pagamento</a></li>  --}}
                    <li><a id="espacomenu" href="#">a fazer</a></li>
                    <li><a id="espacomenu" href="#">a fazer</a></li>
                    <li><a id="espacomenu" href="#">a fazer</a><li>
                 </ul>
            </li>
        </ul>

    </div>
</div>


    {{-- <h2>Animated Sidenav Example</h2>
    <p>Click on the element below to open the side navigation menu.</p> --}}
    {{-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>  --}}

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "470px";
      document.getElementById("mySidenav").style.height = "300px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
