<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>
<body>
    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{ route('login.logout')}}">Sair</a></li>
      </ul>





      <ul id="slide-out" class="sidenav " >
        <li><div class="user-view">
          <div class="background red ">
           <img src="{{asset('img/office.jpg')}}" style="opacity: 0.5">
          </div>
          <a href="#name"><span class="white-text name">{{ auth()->user()->firstname }}  {{ auth()->user()->lastname }}</span></a>
          <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
         </div></li>

          <li><a href="{{route('admin.dashboard')}}"><i class="material-icons">dashboard</i>Dashboard</a></li>
          <li><a href="{{route('admin.produtos')}}"><i class="material-icons">playlist_add_circle</i>Produtos</a></li>
          <li><a href="{{route('site.carrinho')}}"><i class="material-icons">shopping_cart</i>Pedidos</a></li>
      </ul>



    @yield('conteudo')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{asset('js/chart.js')}}" ></script>
    <script src="{{asset('js/main.js')}}"></script>
    @stack('graficos')
</body>
</html>
