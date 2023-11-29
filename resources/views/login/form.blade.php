@if($mensagem = Session::get('erro'))
{{ $mensagem }}
@endif


@if($errors->any())
    @foreach($errors->all() as $error)
    {{$error}} <br>
    @endforeach

@endif
<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
    <div class="section"></div>
    <main>
      <center>
        <img class="responsive-img" style="width: 350px;" src="https://cdn.discordapp.com/attachments/1146068095232905286/1179308024934973450/9f23b24a7698b1515d6c2584249c7f74.png?ex=65794f2f&is=6566da2f&hm=b40b9d3a874dd9fa3bfa83107fa437cbe3b801ae7720da760eb400255d6e0133&" />
        <div class="section"></div>

        <h5 class="orange-text">Por favor, realize o login</h5>
        <div class="section"></div>

        <div class="container">
          <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

            <form action="{{route('login.auth')}}" method="POST">
                @csrf
              <div class='row'>
                <div class='col s12'>
                </div>
              </div>

              <div class='row'>
                <div class='input-field col s12'>
                  <input class='validate' type='email' name='email' id='email' />
                  <label for='email'>Seu Email</label>
                </div>
              </div>

              <div class='row'>
                <div class='input-field col s12'>
                  <input class='validate' type='password' name='password' id='password' />
                  <label for='password'>Sua senha</label>
                </div>

              </div>

              <br />
              <center>
                <div class='row'>
                  <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect orange'>Login</button>
                </div>
              </center>
            </form>
          </div>
        </div>
        <a href="{{route('login.create')}}">Criar Conta</a>
      </center>

      <div class="section"></div>
      <div class="section"></div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  </body>


