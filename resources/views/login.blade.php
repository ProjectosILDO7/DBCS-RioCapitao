<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - CS-Rio Capitão</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo text-center mb-0">
          <img src="{{ asset('img/CoraçãoSaúde.png') }}" alt="" width="50%" height="50%">
      </div>
      <div class="login-box">
        <form class="login-form" action="{{ route('logar.admin') }}" method="POST">

          @csrf
           {{-- Mensagem de erro --}}
          <span class="small text-danger">{{ $erroEmail ?? null }}</span>

          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ENTRAR</h3>
          <div class="form-group">
            <label class="control-label">USUÁRIO</label>
            <input class="form-control" name="user" type="text" placeholder="E-mail" autofocus value="{{ old('user') }}">
            @error('user')
              <span class="small text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label class="control-label">SENHA</label>
            <input class="form-control" name="password" type="password" placeholder="Palavra passe">
            @error('password')
              <span class="small text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox" name='lembrar'><span class="label-text">Lembrar</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Esqueceu a Senha ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>ENTRAR</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Esqueceu a Senha ?</h3>
          <div class="form-group">
            <label class="control-label">E-MAIL</label>
            <input class="form-control" type="text" placeholder="E-mail">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REDEFINIR</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Voltar ao Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>