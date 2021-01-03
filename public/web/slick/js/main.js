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
  const cantProducto = document.querySelector('.cart_quantity_input').value;
  let arrayProducto   = []; 

  

  


  // Funciones


  const crearProducto = (nombreProducto,descripcion1,descripcion2,precio) => {
    let producto = {
      nombre: nombreProducto,
      descripcion1: descripcion1,
      descripcion2: descripcion2,
      precio      : precio
    }
    
    arrayProducto.push(producto);
  
  }

  const guardarDB = () => {

    localStorage.setItem('item', JSON.stringify(arrayProducto));
    insertarTabla();
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
        <h6 >${element.nombre}</h6>
      </th>
      <td>
          <p>${element.precio}</p>
      </td>
      <td class="cantidad-producto">
        <div class="cart_cantidad_boton d-flex align-items-center">
        <span type="submit" class="fas fa-minus-square h3 mr-1 text-success"></span>
          <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="1">
          
          <span type="submit" class="fas fa-plus-square h3  ml-1 text-success"></span>
        </div>
      </td>
      <td>
        <p>120.00</p>
      </td>
    </tr>`
    
    });
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

      let nombreProducto  = (e.path[1].childNodes[1].innerHTML);
      let descripcion1    = (e.path[1].childNodes[3].innerHTML);
      let descripcion2    = (e.path[1].childNodes[5].innerHTML);
      let precio          = (e.path[1].childNodes[7].innerText);

    if(e.target.innerHTML === 'Añadir al carrito'){
     
    crearProducto(nombreProducto,descripcion1,descripcion2,precio);
    guardarDB();
    }
     
  })

  //  Al iniciar inserta en la tabla lo que haya en localstorage por si acaso
  addEventListener('DOMContentLoaded', insertarTabla);
  
  // Accion al cerrar la ventana
  window.addEventListener("beforeunload", cerrar);

  