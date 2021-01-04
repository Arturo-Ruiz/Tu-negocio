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

<body>
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
                  <a class="nav-link " href="{{route('panel-admin')}}">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text">Panel de Control</span>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('Categories.index')}}">
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
                    <a class="nav-link active" href="{{route('Orders.index')}}">
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
        <div class="main-content" id="panel">

            <!-- Header -->
            <!-- Header -->
            <div class="header bg-primary pb-6">
                @if (session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="alert alert-success">
                                {{ session('info') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                @if (session('danger'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="alert alert-danger">
                                {{ session('danger') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                <div class="container-fluid">
                    <div class="header-body">
                      <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                      <h6 class="h2 text-white d-inline-block mb-0">Pedidos Registrados</h6>

                          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                              <li class="breadcrumb-item"><a href="{{route('panel-admin')}}"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item active"><a href="#">Pedidos</a></li>
                            </ol>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col">
                      <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                          <h3 class="mb-0">Pedidos Registrados</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                          <table id="Categories" class="table align-items-center table-flush">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col" class="sort" data-sort="name">ID</th>
                                <th scope="col" class="sort" data-sort="name">Nombre del cliente</th>
                                <th scope="col" class="sort" data-sort="budget">Telefono</th>
                                <th scope="col" class="sort" data-sort="budget">Productos</th>
                                <th scope="col" class="sort" data-sort="budget">Status</th>
                                <th scope="col" class="sort" data-sort="budget">Total</th>
                                <th scope="col" class="sort" data-sort="status">Acciones</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($orders as $order )

                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <div class="media-body">
                                      <span class="name mb-0 text-sm">{{$order->id}}</span>
                                    </div>
                                  </div>
                                </th>
                                <td class="budget">
                                    {{$order->name}}
                                </td>
                                <td class="budget">
                                    {{$order->email}}
                                </td>
                                <td class="budget">
                                    <?php
                                    $test = json_decode($order->products);
                                   foreach ($test as $key) {
                                      echo $key->cantidad;
                                      echo " ";
                                      echo $key->nombre;
                                      echo " ;";
                                      echo "<br>";
                                   }
                                    ?>
                                </td>
                                <td class="budget">
                                    <?php
                                        $status = $order->status;
                                        if ($status === "1" ) {
                                            echo '<button class="btn btn-info">En Proceso</button>';
                                        }
                                        if ($status === "2" ) {
                                            echo '<button class="btn btn-success">Entregado</button>';
                                        }
                                        if ($status === "3" ) {
                                            echo '<button class="btn btn-warning">Cancelado</button>';
                                        }

                                    ?>
                                </td>
                                <td class="budget">
                                    {{$order->total}}
                                </td>

                                <td>
                                    @if ($order->status === '1')
                                        <a href="{{route('update-order',  $order->id)}}" class="btn btn-primary">Entregar</a>
                                        <a href="{{route('cancel-order', $order->id)}}" class="btn btn-warning">Cancelado</a>
                                    @endif
                                    @if ($order->status === '2')

                                @endif
                                @if ($order->status === '3')

                                @endif
                                    <span class="badge badge-dot mr-4">
                                      <span class="status">
                                          <form method="POST" action="{{route('Orders.destroy', $order->id)}}">
                                            @csrf
                                            @method('DELETE')
                                              <button class="btn btn-danger">Eliminar</button>
                                          </form>
                                      </span>
                                    </span>
                                  </td>
                              </tr>
                              @endforeach




                            </tbody>
                          </table>
                        </div>
                        <!-- Card footer -->

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
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
    $(document).ready(function() {
      $('#Categories').DataTable({
          "language": {

              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     ">",
              "sPrevious": "<"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }

  }
      });
      });
    </script>



</body>
</html>
