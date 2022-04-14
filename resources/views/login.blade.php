<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agendameto Serviços</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Agendameto De Serviços</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Insira Usuario e senha para acessar o site</p>

      <form class="mb-3" id="loginForm" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-md-12">
                <input class="form-control border-right-0" name="email" type="email" placeholder="E-mail" required="true" autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <input class="form-control border-right-0" name="password" type="password" placeholder="Senha" required="true">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="clearfix">
                    <div class="checkbox c-checkbox float-left mt-0">
                        <label>
                            <input type="checkbox" value="true" name="remember">
                            <span class="fa fa-check"></span> Lembre-me
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row mb-3">
            <div class="col-md-12">
                <button class="btn btn-block btn-primary mt-3 w-100" type="submit">Login</button>
            </div>
        </div>
    </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OU -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Entre para usar o Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Entre para usar o Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Eu esqueci minha senha</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registo de novo Usuario</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
