<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Iniciar Sesion - Panel Administrativo | Tu Negocio</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/1.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/nucleo/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/1.css') }}" type="text/css">
  @laravelPWA
    
</head>

<body class="bg-default">

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Bienvenido!</h1>
              <p class="text-lead text-white">Panel Administrativo Tu Negocio.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
                <h2 class="text-center">Iniciar Sesion</h2>
            </div>
            <div class="card-body px-lg-5 py-lg-5">

              <form method="POST" action="{{ route('login') }}">


                @csrf


                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" name="password" type="password">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Iniciar Sesion </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href="https://www.artic-solutions.com/" class="font-weight-bold ml-1" target="_blank">Artic Solutions</a> &<a href="https://colvengroup.com/" class="font-weight-bold ml-1" target="_blank">Colvengroup</a>
          </div>
        </div>
        <div class="col-xl-6">

        </div>
      </div>
    </div>
  </footer>


</body>

</html>
