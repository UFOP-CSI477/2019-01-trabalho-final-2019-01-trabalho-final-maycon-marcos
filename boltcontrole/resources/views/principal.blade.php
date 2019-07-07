<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo', 'BoltControle')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fonte usada no sistema -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
      <!-- Arquivo CSS externo -->
    <link rel="stylesheet"  href="../codigos-CSS-JS/estilo.css">



	  <!-- ícone do sistema web -->
    <link rel="icon"  href="https://img.icons8.com/color/48/000000/edison-bulb.png">
</head>
<body>

  <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <div class="col-4">
      <a href="index.html" class="navbar-brand"><img src="https://img.icons8.com/color/48/000000/edison-bulb.png"><span style="color: #FF4000;">Bolt</span>Controle</a>
    </div>

    <button class="navbar-toggler"type="button"  data-toggle="collapse" data-target="#menuPrincipal" name="button">
      <span class="navbar-toggler-icon"> </span>
    </button>

    <div class="collapse navbar-collapse" id="menuPrincipal">


      <ul class="navbar-nav ">

        <li class="nav-item">
              <a href="index.html" class="nav-link ">Home</a>
        </li>


        <li class="nav-item dropdown"> <a  class="nav-link dropdown-toggle"
           href="#" data-toggle="dropdown">Equipamentos</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('aparelhos.create') }}">Cadastrar</a>
        <a class="dropdown-item" href="/aparelhos">Gerenciar</a>

      </div>
         </li>

         <li class="nav-item">
              <a href="simulacoes.html" class="nav-link ">Simulações</a>
        </li>

        <li class="nav-item dropdown"> <a  class="nav-link dropdown-toggle"
           href="#" data-toggle="dropdown">Perfil</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Editar Perfil</a>
        <a class="dropdown-item" href="pag-Inicial.html">Sair</a>

      </div>
         </li>

      </ul>

      </div>
        <form action="#" class="form-inline my-2"  method="post">
          <input class="form-control mr-2" type="text" name="pesquisa" value="">
          <input class="btn btn-info my-lg-0" type="submit" name="" value="Pesquisar">
        </form>
      </div><!--termino do container -->
    </nav> <!--termino da barra de nevegação -->



    <div class="container mt-5">
        @yield('conteudo')
    </div> <!-- fim do container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
