let xls= document.querySelectorAll('.contain');
xls.forEach(ls => {
    ls.classList.add('imagenesCarro');
});
var xhr = new XMLHttpRequest();
var dataplus = document.querySelectorAll('.frm_actualizar');
var n_carro= document.querySelectorAll('.id_carro');
var cantidades= document.querySelectorAll('.cantidad');

cantidades.forEach(cantidad => {
    cantidad.addEventListener('click',()=> {
        numerode_carro=cantidad.parentElement[1].value;
        var etiqueta_pr= document.querySelector(`#precio${numerode_carro}`);
        var in_oculto= document.querySelector(`#Oculto${numerode_carro}`);
        var Pxprod= parseInt(document.querySelector(`.Pxprod${numerode_carro}`).value);
        precioAtualizado= Pxprod*cantidad.value;
        etiqueta_pr.textContent= `$${precioAtualizado}`;
        in_oculto.value=precioAtualizado;
        acum=0;
        calculando(acum);
    })
});


dataplus.forEach(data => {
    data.addEventListener('submit', (ev) =>{
        var form = new FormData(data);
        xhr.open('POST','cambiandoElementos.php');
        xhr.onload= ()=>{
            if(xhr.status = 200){
               carro= JSON.parse(xhr.responseText);
               mensaje= document.querySelector(`.mensaje${carro}`);
               x=document.createElement('p');
            x.textContent="Se ha actualizado el producto exitosamente";
            mensaje.appendChild(x);
            mensaje.classList.add('mensaje-b');
                setTimeout(() => {
                   mensaje.classList.remove('mensaje-b');
                   x.remove();
                   
               }, 4000);  
               
            }else{
                console.log('ERROR '+xhr.status )
            }
        }
        xhr.send(form);
        ev.preventDefault();
    });
    
    
});