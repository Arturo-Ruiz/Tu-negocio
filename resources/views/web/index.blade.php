
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
              <p class="h4  pt-4">Categoria 1</p>


              <div class="catalogo-1 py-4">
                  <!-- Item 1 -->
                  <div class="mx-2 ">
                      <div class="card  " >
                          <img src="img/product4.jpg" class=" d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Iphone X blanco</h5>
                            <p class="card-text">Memoria: 64GB/256GB</p>
                            <p class="card-text">RAM: 3GB </p>
                            <p class="text-center h6 card-price" ><span class="fas fa-dollar-sign text-success mr-1"></span>500.00</p>
                            <a type="submit" class="btn btn-success col">Añadir al carrito</a>
                            <!-- <div class="row cart_cantidad_boton justify-content-center">
                              <a class="cart_cantidad_restar btn btn-success" href="#"> -  </a>
                              <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="1">
                              <a class="cart_cantidad_sumar btn btn-s uccess" href="#"> + </a>
                            </div> -->
                          </div>
                        </div>
                  </div>

                  <!-- Item 2 -->

                  <div class="mx-2 ">
                      <div class="card" >
                          <img src="img/product5.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Samsung S6</h5>
                            <p class="card-text">Memoria: 64GB/132GB</p>
                            <p class="card-text">RAM: 2GB </p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>120.00</p>
                            <a type="submit" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

                    <!-- Item 3 -->

                    <div class="mx-2 ">
                      <div class="card" >
                          <img src="img/product6.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Samsung S5</h5>
                            <p class="card-text">Memoria: 32GB/64GB</p>
                            <p class="card-text">RAM: 2GB </p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>100.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

                   <!-- Item 4 -->

                   <div class="mx-2">
                      <div class="card" >
                          <img src="img/product7.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Xiaomi A7</h5>
                            <p class="card-text">Memoria: 32GB</p>
                            <p class="card-text">RAM: 2GB</p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>95.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

                   <!-- Item 5 -->

                   <div class="mx-2">
                      <div class="card" >
                          <img src="img/product9.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Mac Desktop</h5>
                            <p class="card-text">Memoria: 1TB</p>
                            <p class="card-text">RAM: 8GB</p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>850.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

              </div> <!-- catalogo div -->


              <!-- catalogo 2 -->
              <p class="h4  pt-4">Categoria 2</p>
              <div class="catalogo-1 py-4">
                  <!-- Item 1 -->
                  <div class="mx-2">
                      <div class="card" >
                          <img src="img/product5.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Samsung S6</h5>
                            <p class="card-text">Memoria: 64GB/132GB</p>
                            <p class="card-text">RAM: 2GB </p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>120.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>



                  <!-- Item 2 -->

                  <div class="mx-2">
                      <div class="card" >
                          <img src="img/product7.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Xiaomi A7</h5>
                            <p class="card-text">Memoria: 32GB</p>
                            <p class="card-text">RAM: 2GB</p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>95.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>
                    <!-- Item 3 -->

                    <div class="mx-2">
                      <div class="card" >
                          <img src="img/product6.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Samsung S5</h5>
                            <p class="card-text">Memoria: 32GB/64GB</p>
                            <p class="card-text">RAM: 2GB </p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>100.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

                   <!-- Item 4 -->

                   <div class="mx-2">
                      <div class="card  ">
                          <img src="img/product4.jpg" class=" d-block img-fluid" alt="...">
                          <div class="p-2">
                              <h5 class="card-title">Iphone X blanco</h5>
                              <p class="card-text">Memoria: 64GB/256GB</p>
                              <p class="card-text">RAM: 3GB </p>
                              <p class="text-center h6 card-price"><span
                                      class="fas fa-dollar-sign text-success mr-1"></span>500.00</p>
                              <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                      </div>
                  </div>

                   <!-- Item 5 -->

                   <div class="mx-2">
                      <div class="card" >
                          <img src="img/product9.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Mac Desktop</h5>
                            <p class="card-text">Memoria: 1TB</p>
                            <p class="card-text">RAM: 8GB</p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>850.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

              </div> <!-- catalogo div -->


              <!-- catalogo 3 -->
              <p class="h4  pt-4">Categoria 3</p>
              <div class="catalogo-1 py-4">
                  <!-- Item 1 -->
                  <div class="mx-2">
                      <div class="card" >
                          <img src="img/product9.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <p class="none">162612612</p>

                            <h5 class="card-title">Mac Desktop</h5>
                            <p class="card-text">Memoria: 1TB</p>
                            <p class="card-text">RAM: 8GB</p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>850.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>
                  <div class="mx-2">
                    <div class="card" >
                        <img src="img/product9.jpg" class="d-block img-fluid" alt="...">
                        <div class="p-2">
                          <p class="none">2323332</p>

                          <h5 class="card-title">Mac 2 Desktop</h5>
                          <p class="card-text">Memoria: 1TB</p>
                          <p class="card-text">RAM: 8GB</p>
                          <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>850.00</p>
                          <a href="" class="btn btn-success col">Añadir al carrito</a>
                        </div>
                      </div>
                </div>
                  <!-- Item 2 -->

                  <div class="mx-2">
                      <div class="card" >
                          <img src="img/product6.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Samsung S5</h5>
                            <p class="card-text">Memoria: 32GB/64GB</p>
                            <p class="card-text">RAM: 2GB </p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>100.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>



                    <!-- Item 3 -->

                    <div class="mx-2">
                      <div class="card" >
                          <img src="img/product5.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Samsung S6</h5>
                            <p class="card-text">Memoria: 64GB/132GB</p>
                            <p class="card-text">RAM: 2GB </p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>120.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

                   <!-- Item 4 -->

                   <div class="mx-2">
                      <div class="card" >
                          <img src="img/product7.jpg" class="d-block img-fluid" alt="...">
                          <div class="p-2">
                            <h5 class="card-title">Xiaomi A7</h5>
                            <p class="card-text">Memoria: 32GB</p>
                            <p class="card-text">RAM: 2GB</p>
                            <p class="text-center h6" ><span class="fas fa-dollar-sign text-success mr-1"></span>95.00</p>
                            <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                        </div>
                  </div>

                   <!-- Item 5 -->

                   <div class="mx-2">
                      <div class="card  ">
                          <img src="img/product4.jpg" class=" d-block img-fluid" alt="...">
                          <div class="p-2">
                              <p class="none">162612612</p>
                              <h5 class="card-title">Iphone X blanco</h5>
                              <p class="card-text">Memoria: 64GB/256GB</p>
                              <p class="card-text">RAM: 3GB </p>
                              <p class="text-center h6 card-price"><span
                                      class="fas fa-dollar-sign text-success mr-1"></span>500.00</p>
                              <a href="" class="btn btn-success col">Añadir al carrito</a>
                          </div>
                      </div>
                  </div>
              </div> <!-- catalogo div -->
          </div>
      </section>








      <section id="detalle">
        <div class="container">
          <div class=" row justify-content-center py-5">
            <p class="h2">Detalles del pedido</p>
          </div>
          <div class="row mb-2">
            <div class="col-md-4">
              <input type="text" placeholder="Ingresa tu Nombre" class="form-control mt-3">

            </div>
            <div class="col-md-4">
              <input type="text" placeholder="Ingresa Tu Numero de telefono" class="form-control mt-3">
            </div>
            <div class="col-md-4">
              <input type="email" placeholder="Ingresa Tu Correo Electronico" class="form-control mt-3">
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
              <button class="btn btn-success mx-2 my-1 col-md-3">Confirmar y enviar</button>
              <button class="btn btn-outline-danger mx-2 my-1 col-md-3">Cancelar</button>
            </div>
        </div>
      </section>

    <br /><br />
    <footer class="footer">
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="copyright">
            &copy; 2020 <a href="" target="_blank">Arturo Ruiz y Henry Silva</a>.
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
