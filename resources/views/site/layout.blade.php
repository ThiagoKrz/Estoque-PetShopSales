<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <ul id='dropdown1' class='dropdown-content'>
@foreach ($categoriasMenu as $categoriaM)
<li><a href="{{route('site.categoria', $categoriaM->id)}}">{{$categoriaM->nome}}</a></li>
@endforeach
</ul>

<ul id='dropdown2' class='dropdown-content'>
    <li><a href="{{route('admin.dashboard',)}}">Dashboard</a></li>
    <li><a href="{{route('login.logout',)}}">Sair</a></li>
</ul>

    <nav class="red">
        <div class="nav-wrapper container">
              <a href="{{route('site.index')}}" class="center brand-logo " href="index.html"><img src="https://cdn.discordapp.com/attachments/1146068095232905286/1179313223640551564/sdsds.png?ex=65795407&is=6566df07&hm=875495411ae2f01958b5cf5583922acd5adc0ca9d1bd89463aae77e736bea150&" style="display: block; margin: 0 auto; width: 23%;"></a>
          <ul id="nav-mobile" class="left">
            <li><a href="{{route('site.index')}}">Home</a></li>
            <li><a href="" class="dropdown-trigger" data-target='dropdown1'> Categorias <i class="material-icons right">expand_more</i></a></li>
            <li><a href="{{route('site.carrinho')}}">Carrinho <span class="new badge blue" data-badge-caption=""> {{\Cart::getContent()->count()}}</span> </a></li>
          </ul>

          @auth
          <ul id="nav-mobile" class="right">
            <li><a href="" class="dropdown-trigger" data-target='dropdown2'> Olá {{ auth()->user()->firstname }} <i class="material-icons right">expand_more</i></a></li>
          </ul>
          @else
          <ul id="nav-mobile" class="right">
            <li><a href="{{route('login.form')}}"> Login <i class="material-icons right">lock</i> </a></li>
            <li><a href="{{route('login.create')}}"> Cadastrar-se <i class="material-icons right"></i> </a></li>
          </ul>

          @endauth
        </div>
      </nav>




@yield('conteudo')





<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    var elemDrop = document.querySelectorAll('.dropdown-trigger');
    var instanceDrop = M.Dropdown.init(elemDrop,{
        coverTrigger: false,
        constrainWidth: false
    });
</script>

</body>
</html>
