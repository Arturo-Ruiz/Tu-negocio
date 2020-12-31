<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Tu Negocio | Panel Administrativo</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"> -->
  <!-- Fonts -->

  <link rel="stylesheet" href="{{ asset('admin/fonts/1.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/nucleo/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/1.css') }}" type="text/css">
  @laravelPWA
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet" data-turbolinks-track="true">
</head>

<body id="img" class="img">
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
              <img src="{{ asset('admin/img/blue.png') }}" class="navbar-brand-img" alt="Logo de la Aplicacion">
            </a>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                @if (auth()->user()->role  == 'Administrador')
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('panel-admin')}}">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text">Panel de Control</span>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Categories.index')}}">
                      <i class="ni ni-bullet-list-67 "></i>
                      <span class="nav-link-text">Categorías</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('Products.index')}}">
                      <i class="fab fa-wpforms"></i>
                      <span class="nav-link-text">Productos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Orders.index')}}">
                        <i class="fas fa-boxes"></i>
                        <span class="nav-link-text">Pedidos</span>
                    </a>
                </li>
                @endif



              </ul>
              <!-- Divider -->
              <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
              </h6>
              <!-- Navigation -->
              <hr class="my-3">

              <ul class="navbar-nav mb-md-3">

                <li class="nav-item">
                  <a class="nav-link active active-pro" target="_blank" href="https://colvengroup.com/">
                    <i class="fa fa fa-headset"></i>
                    <span class="nav-link-text">Soporte Técnico</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>








      <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                  <!-- Sidenav toggler -->
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">

                      <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name }}</span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Bienvenido!</h6>
                    </div>
                    <a href="https://colvengroup.com/" target="_blank" class="dropdown-item">
                      <i class="fa fa-headset"></i>
                      <span>Soporte Técnico</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
                     {{ __('Logout') }} class="dropdown-item">
                      <i class="ni ni-user-run"></i>
                      <span>Cerrar Sesión</span>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
          <div class="container-fluid">
            <div class="header-body">
              <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item active"><a href="#">Panel de Control</a></li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- Card stats -->
              <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Productos Registrados</h5>
                            <span class="h2 font-weight-bold mb-0">{{$products_number}}</span>
                          </div>
                          <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                              <i class="fab fa-wpforms"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-xl-4 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Usuarios Registrados</h5>
                          <span class="h2 font-weight-bold mb-0">{{$users_number}}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                            <i class="fa fa-user"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Categorias Registradas</h5>
                            <span class="h2 font-weight-bold mb-0">{{$categories_number}}</span>
                          </div>
                          <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                              <i class="ni ni-chart-pie-35"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-xl-2 col-md-6">

                </div>
                <div class="col-xl-2 col-md-6">

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
          <div class="row">
            <div class="col-xl-12">
              <div class="card bg-default">
                <div class="card-header bg-transparent">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="text-light text-uppercase ls-1 mb-1">Vista Previa</h6>
                      <h5 class="h3 text-white mb-0">Pedidos</h5>
                    </div>

                  </div>
                </div>
                <div class="card-body">
                  <!-- Chart -->
                  <div class="chart">
                    <!-- Chart wrapper -->
                    <canvas id="vacants" class="chart-canvas"></canvas>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- Footer -->
          <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                  &copy; 2020 <a href="https://www.artic-solutions.com/" class="font-weight-bold ml-1" target="_blank">Artic Solutions</a> &<a href="https://colvengroup.com/" class="font-weight-bold ml-1" target="_blank">Colvengroup</a>
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="https://www.artic-solutions.com/" class="nav-link" target="_blank">Artic Solutions</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://colvengroup.com/" class="nav-link" target="_blank">Colvengroup</a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">Términos y Condiciones de la Aplicacion</a>
                  </li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
      </div>






    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap_js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-scroll-lock/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.extension.js') }}"></script>
    <!-- Arturo JS -->
    <script src="{{ asset('admin/js/1.js') }}"></script>
    <script>
        var enero = JSON.parse("{{ json_encode($enero) }}")
        var febrero = JSON.parse("{{ json_encode($febrero) }}")
        var marzo = JSON.parse("{{ json_encode($marzo) }}")
        var abril = JSON.parse("{{ json_encode($abril) }}")
        var mayo = JSON.parse("{{ json_encode($mayo) }}")
        var junio = JSON.parse("{{ json_encode($junio) }}")
        var julio = JSON.parse("{{ json_encode($julio) }}")
        var agosto = JSON.parse("{{ json_encode($agosto) }}")
        var septiembre = JSON.parse("{{ json_encode($septiembre) }}")
        var octubre = JSON.parse("{{ json_encode($octubre) }}")
        var noviembre = JSON.parse("{{ json_encode($noviembre) }}")
        var diciembre = JSON.parse("{{ json_encode($diciembre) }}")




        var ctx = document.getElementById('vacants');
        var vacants = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets: [{
                    label: '# De este mes',
                    data: [enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>
</body>
</html>
