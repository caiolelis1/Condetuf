<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">  
  <title>Cadastro</title>

  <!-- Icones -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mx-4">
          <div class="card-body p-4">
            <h1> Cadastrar </h1>
            <p class="text-muted">Crie sua conta</p>
            <form method="POST" action="{{ route('register') }}">
              {{ csrf_field() }} 
              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" name="name" class="form-control" placeholder="Usuário">
              </div>              
  
              <div class="input-group mb-3">
                <span class="input-group-addon">@</span>
                <input type="text" name="email" class="form-control" placeholder="Email">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Senha">
              </div>

              <div class="input-group mb-3">
                <span class="input-group-addon"><i class="icon-lock"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme a senha ">
              </div>

              <button type="submit" class="btn btn-block btn-success">Criar conta</button>
            </form>

            <a href="/login" class="btn btn-block btn-outline-primary mt-2">Já possui uma conta? Entre</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
  <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
  <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

</body>
</html>