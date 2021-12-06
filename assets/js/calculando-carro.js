var precios = document.querySelectorAll('.precio');
var precio_etiqueta= document.querySelector('.pagar');
var precio_total= document.querySelector('.totalPagar');
var precio_iva= document.querySelector('.iva');
var precio_oculto= document.querySelector('.pagarOculto');
var total_oculto= document.querySelector('.precioOculto');
var iva_oculto= document.querySelector('.ivaOculto');
var vacio= document.querySelector('.vacio');
var btn_vacio= document.querySelector('#comprar');
var xhr = new XMLHttpRequest();
var dataplus = document.querySelectorAll('.prueba');
var acum=0;
calculando(acum);
dataplus.forEach(data => {
    data.addEventListener('submit', (ev) =>{
           var form = new FormData(data);
            xhr.open('POST','borrandoElementos.php');
            xhr.onload= ()=>{
                if(xhr.status = 200){
                    v=JSON.parse(xhr.responseText);
                    numero= parseInt(v);
                    var Eliminar = document.querySelector(`.pr${numero}`);
                    eliminandoProducto=precio_oculto.value-Eliminar.value;
                    precio_etiqueta.textContent=`$${eliminandoProducto}`;
                    precio_oculto.value=eliminandoProducto;
                    var nuevo_iva=eliminandoProducto*.16;
                    precio_iva.textContent=`$${nuevo_iva}`;
                    precio_iva.value=nuevo_iva;
                    var nuevo_total=eliminandoProducto+nuevo_iva;
                    precio_total.textContent=`$${nuevo_total}`;
                    total_oculto.value=nuevo_total;
                    var formulario= document.getElementById(numero);
                    formulario.classList.remove('precio');
                    formulario.remove();
                    if(total_oculto.value==0){
                        confirmacion=0;
                        Carrovacio(confirmacion);
                    }else{
                        confirmacion=1;
                        Carrovacio(confirmacion);
                    }
                   
                   
                    
                    
                  /* console.log('funciona');
                    setTimeout(() => {
                        mensaje.classList.remove('mensaje-bien');
                        x.remove();
                    }, 5000); */
                 
                }else{
                    console.log('ERROR '+xhr.status )
                }
                
            }
            xhr.send(form); 
            ev.preventDefault();
        });
});




function calculando(acum) {

 precios.forEach(precio => {
    x=parseInt(precio.value);
    acum=acum+x;
    
    console.log(precio);
    
}); 
iva=acum*.16;
precio_iva.textContent=`$${iva}`;
precio_iva.value=iva;
precio_etiqueta.textContent=`$${acum}`;
precio_oculto.value=acum;
precio_total.textContent=`$${acum+iva}`
total_oculto.value=acum+iva
var confirmacion;
if(parseInt( total_oculto.value)==0){
    confirmacion=0;

     Carrovacio(confirmacion); 

}else{
    confirmacion=1;
    console.log(confirmacion);
    Carrovacio(confirmacion);
}
}
 function Carrovacio(confirmacion) {
    x= document.createElement('p');
    if(confirmacion==0){
        console.log(vacio);
        x.textContent='No has añadido nada a tu carrito';
       vacio.classList.add('CarroVacio');
    vacio.appendChild(x); 
    btn_vacio.classList.add('desaparecer');
    
    }else{
        if(vacio.classList='CarroVacio'){
            vacio.classList.remove('CarroVacio');
        }
        btn_vacio.classList.remove('desaparecer');
    }
    
} 