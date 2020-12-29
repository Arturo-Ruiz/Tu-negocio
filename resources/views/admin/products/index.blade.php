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
                    <a class="nav-link active" href="{{route('Products.index')}}">
                      <i class="fab fa-wpforms"></i>
                      <span class="nav-link-text">Productos</span>
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
                      <h6 class="h2 text-white d-inline-block mb-0">Productos Registrados</h6>

                          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                              <li class="breadcrumb-item"><a href="{{route('panel-admin')}}"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item active"><a href="#">Productos</a></li>
                            </ol>
                          </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                          <a href="#"  data-toggle="modal" data-target="#registrar_producto" class="prueba_boton_registrar btn btn-lg btn-neutral"> Registrar</a>
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
                          <h3 class="mb-0">Productos Registrados</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                          <table id="Categories" class="table align-items-center table-flush">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col" class="sort" data-sort="name">ID</th>
                                <th scope="col" class="sort" data-sort="name">Imagen</th>
                                <th scope="col" class="sort" data-sort="budget">Nombre</th>
                                <th scope="col" class="sort" data-sort="budget">Descripcion</th>
                                <th scope="col" class="sort" data-sort="budget">Precio</th>
                                <th scope="col" class="sort" data-sort="budget">Categoria</th>
                                <th scope="col" class="sort" data-sort="status">Acciones</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($products as $product )

                              <tr>
                                <th scope="row">
                                  <div class="media align-items-center">
                                    <div class="media-body">
                                      <span class="name mb-0 text-sm">{{$product->id}}</span>
                                    </div>
                                  </div>
                                </th>
                                <td class="budget">
                                    <img class="img-thumbnail" width="80px" src={{asset($product->img)}} alt="Imagen_del_Producto">
                                </td>
                                <td class="budget">
                                    {{$product->name}}
                                </td>

                                <td class="budget">
                                    {{$product->description}}
                                </td>
                                <td class="budget">
                                    {{$product->price}}
                                </td>
                                <td class="budget">
                                    {{$product->category->name}}
                                </td>

                                <td>
                                    <span class="badge badge-dot mr-4">
                                      <span class="status">
                                          <form method="POST" action="{{route('Products.destroy', $product->id)}}">
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














          <div class="modal fade" id="registrar_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrar Producto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('Products.store')}}" enctype="multipart/form-data" method="POST">

                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                          <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            </div>
                            <input class="form-control" placeholder="Ingresar Nombre" name="name"  required type="text">
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                              </div>
                                <textarea class="form-control" name="description" required placeholder="Ingresar Descripción del Producto"  cols="3" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"> <b>COP</b></span>
                              </div>
                              <input class="form-control" placeholder="Ingresar Precio" name="price"  required type="number">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">

                              <select class="form-control" name="category_id">
                                <option value="" disabled selected>Selecciona la Categoria</option>

                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                 @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            Imagen:
                            <div class="input-group input-group-alternative mb-3">
                                <input id="img" name="img" class="form-control" type="file">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button  type="submit" class="btn test-buuton btn-primary">Registrar Producto</button>
                </form>

                </div>
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
