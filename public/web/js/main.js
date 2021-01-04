$('.catalogo-1').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

   // CARGAR PEDIDOS EN TABLA

  // Variables globales
  const divProducto   = document.querySelector('.productoCont');
  const tablaPedido   = document.querySelector('#tablaDetalle');
  const price   = document.querySelector('#price');
  const price_m   = document.querySelector('#price_m');
  const cantProducto = document.querySelector('.cart_quantity_input').value;
  let arrayProducto   = [];
  var total_venta = localStorage.total_venta;
  const array   = document.querySelector('#array');




  // Funciones


  const crearProducto = (id,nombreProducto,descripcion1,descripcion2,precio) => {
    total_venta = parseInt(precio) + parseInt(total_venta);
    price.innerHTML =  "COP "+ total_venta;
    price_m.innerHTML =  "COP "+ total_venta;


    let producto = {
      id: id,
      nombre: nombreProducto,
      descripcion1: descripcion1,
      descripcion2: descripcion2,
      cantidad: "1",
      precio      : precio,
      total      : precio
    }

    arrayProducto.push(producto);

  }

  const guardarDB = () => {
    localStorage.setItem('item', JSON.stringify(arrayProducto));
    localStorage.setItem('total_venta', total_venta);
    insertarTabla();
    $("#array").val(localStorage.item);
    $("#total_venta").val(localStorage.total_venta);


}

const insertarTabla = () => {

  tablaPedido.innerHTML = '';
  arrayProducto = JSON.parse(localStorage.getItem('item'));

  // console.log(arrayProducto);

  if (arrayProducto === null){
    arrayProducto = [];
  } else {
    arrayProducto.forEach(element => {
      tablaPedido.innerHTML += `<tr class="table-succes align-items-center">
      <th scope="row">
        <h6 class="text-white" >${element.nombre}</h6>
      </th>
      <td>
          <p>${element.precio}</p>
      </td>
      <td class="cantidad-producto">
        <div class="cart_cantidad_boton d-flex align-items-center">

        <span type="submit" onClick='subtractQuantity("${element.id}","${element.precio}");' class=" mr-1 text-success"><i class="fa fa-minus" aria-hidden="true"></i></span>

          <input class="cart_quantity_input" type="text" name="quantity" value="${element.cantidad}" autocomplete="off" size="1">

          <span type="submit" onClick='addQuantity("${element.id}","${element.precio}");' class="ml-1 text-success"><i class="fa fa-plus" aria-hidden="true"></i></span>
        </div>
      </td>
      <td>
        <p>${element.total}</p>
      </td>
      <td>
      <span type="submit" onClick='removeItem("${element.id}");' class="ml-1 text-danger"><i class="fa fa-times" aria-hidden="true"></i></span>
      </td>
    </tr>`

    });
  }

}
function removeItem(product_id)
    {

        for (var i = 0; i < arrayProducto.length; i++) {
            if (arrayProducto[i].id == product_id) {
              total_venta = parseInt(total_venta) - parseInt(parseInt(arrayProducto[i].total));
              price.innerHTML =  "COP "+ total_venta;
              price_m.innerHTML =  "COP "+ total_venta;


              arrayProducto.splice(i,1);
              guardarDB();
              insertarTabla();
            }

        }
    }
function subtractQuantity(product_id, precio)
{

    for (var i = 0; i < arrayProducto.length; i++) {
        if (arrayProducto[i].id == product_id) {
          arrayProducto[i].cantidad--;
          arrayProducto[i].total = (parseInt(arrayProducto[i].total) - parseInt(precio));
          total_venta = parseInt(total_venta) - parseInt(precio);
          price.innerHTML =  "COP "+ total_venta;
          price_m.innerHTML =  "COP "+ total_venta;


          guardarDB();
          insertarTabla();
        }

        if (arrayProducto[i].cantidad == 0) {
          arrayProducto.splice(i,1);
          total_venta = parseInt(total_venta);

          price.innerHTML =  "COP "+ total_venta;
          price_m.innerHTML =  "COP "+ total_venta;

          guardarDB();
          insertarTabla();
        }

    }

}

function addQuantity(product_id, precio)
{
  for (var i = 0; i < arrayProducto.length; i++) {
    if (arrayProducto[i].id == product_id) {
        arrayProducto[i].cantidad++;
        arrayProducto[i].total = (parseInt(arrayProducto[i].total) + parseInt(precio));
        total_venta = parseInt(precio) + parseInt(total_venta);
        price.innerHTML =  "COP "+ total_venta;
        price_m.innerHTML =  "COP "+ total_venta;


        guardarDB();
        insertarTabla();
    }
}





}
  const cerrar = () => {
    localStorage.removeItem('item');
  }

  const sumarProducto = () => {
    cantProducto.value += 1
  }


  // Listeners

  divProducto.addEventListener('click', (e) => {

    e.preventDefault();
    // console.log(e);
      let id              = (e.path[1].childNodes[1].innerHTML);
      let nombreProducto  = (e.path[1].childNodes[2].innerHTML);
      let descripcion1    = (e.path[1].childNodes[3].innerHTML);
      let descripcion2    = 'no'
      let precio          = (e.path[1].childNodes[5].innerText);




    if(e.target.innerHTML === 'Añadir al carrito'){

    crearProducto(id,nombreProducto,descripcion1,descripcion2,precio);
    guardarDB();
    }

  })

  //  Al iniciar inserta en la tabla lo que haya en localStorage por si acaso
  addEventListener('DOMContentLoaded', insertarTabla);
  
  $("#array").val(localStorage.item);
  $("#total_venta").val(localStorage.total_venta);


  $("#search-f").on("click", function() {

    $keyword = $('#search_vacants').val();
    $category = $('#select_categories').val();

    if($keyword === null, $category === null){
        document.getElementById('info_test').className = 'test_show';
    }else{
        window.location = "/vacantes-de-trabajo/Nombre_Producto=" + $keyword + "/" + $category;
    }

});


$("#search-mobile").on("click", function() {

  $keyword = $('#search_vacants_mobile').val();
  $category = $('#select_categories-mobile').val();




  if($keyword == "", $category === null ){
    document.getElementById('info_test_mobile').className = 'test_show';
  }else{
    window.location = "/vacantes-de-trabajo/Nombre_Producto=" + $keyword + "/" + $category;
}




});


$("#back-to-top").on("click", function () {
  $("body,html").animate(
    {
      scrollTop: 2200,
    },
    800
  );
});


$("#back-to-top-s").on("click", function () {
  $("body,html").animate(
    {
      scrollTop: 2200,
    },
    800
  );
});


if(localStorage.total_venta === undefined){
    localStorage.total_venta = 0;
    total_venta= 0;
}else{
    price.innerHTML = "COP "+ localStorage.total_venta;

    price_m.innerHTML = "COP "+ localStorage.total_venta;

}

