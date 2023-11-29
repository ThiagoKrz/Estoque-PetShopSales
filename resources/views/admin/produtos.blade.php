@extends('admin.layout')
@section('titulo','Produtos')
@section('conteudo')
<ul id='dropdown2' class='dropdown-content'>
    <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
    <li><a href="{{ route('login.logout')}}">Sair</a></li>
  </ul>


  <nav class="red">
      <div class="nav-wrapper container ">
          <a href="{{route('site.index')}}" class="center brand-logo " href="index.html"><img src="https://cdn.discordapp.com/attachments/1146068095232905286/1179313223640551564/sdsds.png?ex=65795407&is=6566df07&hm=875495411ae2f01958b5cf5583922acd5adc0ca9d1bd89463aae77e736bea150&" style="display: block; margin: 0 auto; width: 23%;"></a>
        <ul class="right ">
            <li class="hide-on-med-and-down"><a href="#" onclick="fullScreen()"><i class="material-icons">settings_overscan</i> </a> </li>
            <li><a href="#" class="dropdown-trigger" data-target='dropdown2'>Olá {{auth()->user()->firstname}} <i class="material-icons right">expand_more</i> </a></li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger left  show-on-large"><i class="material-icons">menu</i></a>
      </div>
    </nav>


  <ul id="slide-out" class="sidenav " >
    <li><div class="user-view">
      <div class="background red ">
       <img src="{{asset('img/office.jpg')}}" style="opacity: 0.5">
      </div>
      <a href="#name"><span class="white-text name">{{ auth()->user()->firstname }}  {{ auth()->user()->lastname }}</span></a>
      <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
     </div></li>

      <li><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
      <li><a href="#"><i class="material-icons">playlist_add_circle</i>Produtos</a></li>
      <li><a href="#!"><i class="material-icons">shopping_cart</i>Pedidos</a></li>
      <li><a href="#!"><i class="material-icons">bookmarks</i>Categorias</a></li>
  </ul>
<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#create">
      <i class="large material-icons">add</i>
    </a>
  </div>

@include('admin.produtos.create')


    <div class="row container crud">



            <div class="row titulo ">
              <h1 class="left">Produtos</h1>
              <span class="right chip">{{$produtos->count()}} produtos exibidos nesta página</span>
            </div>



            <div class="card z-depth-4 registros" >
                @include('admin.includes.mensagens')

            <table class="striped ">
                <thead>
                  <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Produto</th>

                      <th>Preço</th>
                      <th>Categoria</th>
                      <th></th>
                  </tr>
                </thead>

                <tbody>

                    @foreach($produtos as $produto)
                  <tr>
                    <td><img src="{{ url("storage/{$produto->imagem}") }}" class="circle "></td>
                    <td>#{{$produto->id}}</td></td>
                    <td>{{$produto->nome}}</td>
                    <td>R$ {{number_format($produto->preco, 2, ',', '.')}}</td>
                    <td>{{$produto->categoria->nome}}</td>
                    <td>
                      <a href="#delete-{{$produto->id}}" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                      @include('admin.produtos.delete')
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>

            <div class="row center">
                {{ $produtos->links('custom.pagination') }}

            </div>
    </div>

@endsection
