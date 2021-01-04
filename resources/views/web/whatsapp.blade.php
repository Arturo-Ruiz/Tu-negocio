<style>
    .none{
        display: none;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<input type="text" class="none" id="nombre" value="{{$products}}" name="" id="">
<textarea class="none" name="" cols="30" rows="10" id="hello"></textarea>


<script>

var name = '{{$name}}';
var email = '{{$email}}';
var phone = '{{$phone}}';

var total = '{{$total}}';


var productos = $("#nombre").val()
var array = JSON.parse(productos)


array.forEach(element => {
    document.getElementById('hello').innerHTML += element.cantidad + ' ' + element.nombre + ' ; ' ;
});

var men_productos = $("#hello").val()
var mensaje= 'Hola Mi Nombre es : ' + name + " Mi Numero Telefonico es : " + phone + " Mi Correo Electronico es : " + email + " Mi pedido es : " + men_productos + " Y el Total de mi compra es de : " + total + ' COP';

var url = 'https://api.whatsapp.com/send?phone=57573205790252&text=' + mensaje;

window.location=url;

</script>
{{-- Hola --}}
