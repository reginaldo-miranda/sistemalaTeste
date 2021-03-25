

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
