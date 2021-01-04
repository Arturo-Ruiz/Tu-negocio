
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>
    Tu Negocio
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="{{ asset('web/assets/css/font-awesome.css') }}" rel="stylesheet" />

  @laravelPWA
  <!-- CSS Files -->
  <link href="{{ asset('web/assets/css/argon-design-system.css?v=1.2.0') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('web/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('web/slick/slick-theme.css') }}">
</head>
<style>
  .color{
    color: #DCA900;
  }
  .none{
    display: none;
  }
</style>
<body class="landing-page">
  <!-- Navbar -->

<section  class="sticky-top">
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-primary navbar-dark bg-dark headroom">
      <div class="container">
          <a class="navbar-brand" href="search.html">Tu Negocio</a>
          <div class="d-none d-lg-block d-xl-block">
            <a class="mr-4 color" href="#" id="price"><i class="fa fa-usd" aria-hidden="true"></i> 0.00</a>
            <a class="color" href="#" id="back-to-top"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </div>
          <button class="navbar-toggler" type="button" >
            <a class="mr-4 color" href="#"  id="price_m"><i class="fa fa-usd" aria-hidden="true"></i> 0.00</a>
            <a class="color" id="back-to-top-s" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
          </button>
      </div>
  </nav>


<nav class="bg-light">

        <div class="justify-content-center">
          <div class=" container busqueda-input">
            <div class="row mx-2 align-items-center py-2">
                <input type="text" class="form-control col" placeholder="Buscar">
                <button type="submit" class="btn btn-outline-success col-2 ml-1 d-none d-md-block d-lg-block d-xl-block">Buscar</button>
                <span type="submit" class="color fa fa-search fa-2x d-block d-block d-sm-block d-md-none ml-3"></span>
            </div>
        </div>
        </div>

</nav>
</section>

  <!-- End Navbar -->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape  shape-default">
        <!-- <div class="fondo">

        </div> -->
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex -items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-black">Tu Negocio</h1>
                <h2 class="display-4 font-weight-normal text-black display-1 banner-sutittle text-muted">Vende Mas! </h2>
              </div>
            </div>

            <br>

          </div>
        </div>

      </div>



      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>




        <section id="catalogo" class="productoCont">
          <div class="container">
              <hr class="green">
              <p class="text-center h2 text-dark"> Catálogo</p>
              <hr class="green">
              <p class="h4  pt-4"><?php   echo $categories_all[0];    ?></p>


              <div class="catalogo-1 py-4">
                  <!-- Item 1 -->
                  <?php
                  $productos_0 = $products_all[0];
                  foreach ($productos_0 as $key) {
                      echo'<div class="mx-2">';
                      echo'<div class="card" >';
                      echo'<img src="';
                      echo $key->img;
                      echo '" class="d-block img-fluid" alt="Imagen del producto">';
                      echo '<div class="p-2">';
                      echo '<p class="none">';
                      echo $key->id;
                      echo '</p>';
                      echo '<p class="">';
                      echo $key->id;
                      echo '</p>';
                      echo'<h5 class="card-title">';
                      echo $key->name;
                      echo '</h5>';
                      echo '<p class="card-text">';
                      echo $key->description;
                      echo '</p>';
                      echo '<p class="card-text none">RAM: 8GB</p>';
                      echo '<p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>';
                      echo $key->price;
                      echo '</p>';
                      echo'<a href="" class="btn btn-success col">Añadir al carrito</a>
                            </div>
                          </div>  </div>';
                  }

                 ?>

              </div> <!-- catalogo div -->


              <!-- catalogo 2 -->
              <p class="h4  pt-4"><?php   echo $categories_all[1];    ?></p>
              <div class="catalogo-1 py-4">
                <?php
                $productos_2 = $products_all[1];
                foreach ($productos_2 as $key) {
                    echo'<div class="mx-2">';
                    echo'<div class="card" >';
                    echo'<img src="';
                    echo $key->img;
                    echo '" class="d-block img-fluid" alt="Imagen del producto">';
                    echo '<div class="p-2">';
                    echo '<p class="none">';
                    echo $key->id;
                    echo '</p>';
                    echo '<p class="">';
                    echo $key->id;
                    echo '</p>';
                    echo'<h5 class="card-title">';
                    echo $key->name;
                    echo '</h5>';
                    echo '<p class="card-text">';
                    echo $key->description;
                    echo '</p>';
                    echo '<p class="card-text none">RAM: 8GB</p>';
                    echo '<p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>';
                    echo $key->price;
                    echo '</p>';
                    echo'<a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>  </div>';
                }

               ?>

              </div> <!-- catalogo div -->


              <!-- catalogo 3 -->
              <p class="h4  pt-4"><?php   echo $categories_all[2];    ?></p>

              <div class="catalogo-1 py-4">
                <?php
                $productos_3 = $products_all[2];
                foreach ($productos_3 as $key) {
                    echo'<div class="mx-2">';
                    echo'<div class="card" >';
                    echo'<img src="';
                    echo $key->img;
                    echo '" class="d-block img-fluid" alt="Imagen del producto">';
                    echo '<div class="p-2">';
                    echo '<p class="none">';
                    echo $key->id;
                    echo '</p>';
                    echo '<p class="">';
                    echo $key->id;
                    echo '</p>';
                    echo'<h5 class="card-title">';
                    echo $key->name;
                    echo '</h5>';
                    echo '<p class="card-text">';
                    echo $key->description;
                    echo '</p>';
                    echo '<p class="card-text none">RAM: 8GB</p>';
                    echo '<p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>';
                    echo $key->price;
                    echo '</p>';
                    echo'<a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>  </div>';
                }

               ?>
                  <!-- Item 1 -->









                  </div>
              </div> <!-- catalogo div -->
          </div>
      </section>








      <section id="detalle">
        <div class="container">
          <div class=" row justify-content-center py-5">
            <p class="h2">Detalles del pedido</p>
          </div>
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
          <form action="{{route('take-order')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <input type="hidden" name="productos" id="array" >
            <input  type="hidden" name="total_venta" id="total_venta" >


          <div class="row mb-2">
            <div class="col-md-4">
              <input type="text" name="name" required placeholder="Ingresa tu Nombre" class="form-control mt-3">

            </div>
            <div class="col-md-4">
              <input type="text" name="phone" required placeholder="Ingresa Tu Numero de telefono" class="form-control mt-3">
            </div>
            <div class="col-md-4">
              <input type="email" name="email" required placeholder="Ingresa Tu Correo Electronico" class="form-control mt-3">
            </div>
          </div>
          <div class="row ">


            <table class="table table-responsive-md table-hover table-dark mt-5">
              <thead>
                <tr class="">
                  <td scope="col" class="head_item ">Item</td>
                  <td scope="col" class="">Precio</td>
                  <td scope="col" class="">Cantidad</td>
                  <td scope="col" class="">Total</td>
                  <td scope="col" class="">Acciones</td>
                </tr>
              </thead>
              <tbody id="tablaDetalle">

                <!-- item 1 -->
                <tr class="table-succes align-items-center">

                  <th scope="row">
                    <h6 >Samsung S6</h6>
                  </th>

                  <td>
                      <p>120.00</p>
                  </td>

                  <td class="cantidad-producto">
                    <div class="cart_cantidad_boton">
                      <a class="cart_cantidad_sumar btn btn-outline-light" href="#"> + </a>
                      <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="1">
                      <a class="cart_cantidad_restar btn btn-outline-light" href="#"> - </a>
                    </div>
                  </td>

                  <td>
                    <p>120.00</p>
                  </td>
                </tr>

              </tbody>

            </table>

          </div>

            <!-- confirmar y Cancelar -->
            <div class="row justify-content-center py-4">
              <button type="submit" class="btn btn-success mx-2 my-1 col-md-3">Confirmar y enviar</button>
              <button class="btn btn-outline-danger mx-2 my-1 col-md-3">Cancelar</button>
            </div>
        </div>

    </form>
      </section>
    <br /><br />
    <footer class="footer">
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="copyright">
            &copy; 2020 <a href="https://www.artic-solutions.com/" class="font-weight-bold ml-1" target="_blank">Artic Solutions</a> &<a href="https://colvengroup.com/" class="font-weight-bold ml-1" target="_blank">Colvengroup</a>
        </div>


        </div>



      </div>
    </footer>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('web/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('web/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('web/js/jquery-migrate-1.4.1.min.js') }}"></script>
  <script src="{{ asset('web/slick/slick.min.js') }}"></script>
  <!-- <script src="js/all.js"></script> -->
  <script src="{{ asset('web/js/main.js') }}"></script>
</body>
</html>
