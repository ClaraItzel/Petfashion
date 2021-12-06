var xhr = new XMLHttpRequest();
var data = document.getElementById('frm_envio');


data.addEventListener('submit', (ev) =>{
    var form = new FormData(data);
    xhr.open('POST','enviar.php');
    xhr.onload= ()=>{
        if(xhr.status = 200){
            var mensaje= document.querySelector('.mensaje');
    x= document.createElement('p');
    x.textContent= 'Su mensaje esta siendo enviado en breve nos pondremos en contacto';
    mensaje.appendChild(x);
    mensaje.classList.add('mensaje-bien')
            setTimeout(() => {
                mensaje.classList.remove('mensaje-bien');
                x.remove();
            }, 5000);
         
        }else{
            console.log('ERROR '+xhr.status )
        }
    }
    xhr.send(form);
    ev.preventDefault();
});
function texto(){
    
    
}