let x= document.querySelectorAll('.contain');

x.forEach(x => {
    x.classList.add('w-100');

});


var cantidad= document.querySelector('#prod_cantidad');
disponibleFuncion();
total(cantidad);
//Declaración de variables para peticiones http
 var xhr = new XMLHttpRequest();//<-- este
var data = document.getElementById('frm_envio-prod');
var mensaje= document.querySelector('.mensaje');
var prod_cantidad=document.querySelector('.prod_cantidad');

data.addEventListener('submit', (ev) =>{ //evento submit en formulario
    var form = new FormData(data);//Se prepara la informacion del formulario
    xhr.open('POST','validarcodigo.php'); //aqui se llama el archivo de las intrucciones en php
    xhr.onload= ()=>{// intrucciones cuando se carga el archivo
        if(xhr.status = 200){//Cuando se ejecuto bien el envio del archivo
            v=JSON.parse(xhr.responseText);//el archivo php con la instruccion json_econde nos manda un arreglo JSON
            let status =(JSON.stringify(v.status));//Se pasan los elementos del json a texto
            let descuento=(JSON.parse(v.descuento));
             if(status=='1'){//validacion de los datos del php
                descuentoF(descuento); 
                x=document.createElement('p');
                x.textContent=`Código válido obtienes ${descuento*100}% de descuento`;
                mensaje.appendChild(x);
                mensaje.classList.add('mensaje-b');
                
                setTimeout(() => {
                    mensaje.classList.remove('mensaje-b');
                    x.remove();
                    
                }, 4000); 
            }else{
                x=document.createElement('p');
                x.textContent="Código invalido";
                mensaje.appendChild(x);
                mensaje.classList.add('mensaje-m');
                setTimeout(() => {
                    mensaje.classList.remove('mensaje-m');
                    x.remove();
                    
                }, 4000);
            }
        }else{
            console.log('ERROR '+xhr.status )
        }
    }
    xhr.send(form);//Se envía la informacion del formulario
    ev.preventDefault();//Evita el envio de los datos
}); 
function descuentoF(descuento) {//funciones que no tienen que ver
    var cantidad= document.querySelector('#prod_cantidad').value;
    var codtitulo= document.querySelector('#cod-titulo');
    var precio= document.querySelector('#precio').value
    var total=cantidad*precio;
    var x=document.querySelector('#precioV');
    var descuentoTotal= total - (total*descuento);
    x.textContent= `$${descuentoTotal}`
    data.classList.add('desaparecer');
    codtitulo.classList.add('desaparecer');
    
}
function total(cantidad) {
    cantidad.addEventListener('click', ()=> {
        var x=document.querySelector('#precioV');
        var precio= document.querySelector('#precio').value
        var precioTotal=cantidad.value*precio;
        x.textContent=`$${precioTotal}.00`;
        precio=precioTotal;
        console.log(precio);
    })
}
function disponibleFuncion() {
    var disponible=document.querySelector('#disponible');
    var divsponible=document.querySelector('.disponible');
    var irCarro=document.querySelector('#AgrCarrito');
    if(disponible.value=="AGOTADO"){
        divsponible.classList.add('disponible-a');
        irCarro.disabled= true;
        irCarro.enable=false;
       console.log(irCarro)
    }else{
        divsponible.classList.add('disponible-b')
        irCarro.disabled= false;
        irCarro.enable=true;
    }
}