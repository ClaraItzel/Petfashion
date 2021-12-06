var xhr = new XMLHttpRequest();
var data2 = document.getElementById('Carro');
var mensaje= document.querySelector('.mensaje');

data2.addEventListener('submit', (ev) =>{
    var form = new FormData(data2);
    xhr.open('POST','AgregarCarro.php');
    xhr.onload= ()=>{
        if(xhr.status = 200){
            x=document.createElement('p');
            x.textContent="Se ha añadido el articulo al carro";
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