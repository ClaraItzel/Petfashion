window.addEventListener('resize',anchoPagina);

function anchoPagina() {
    //DECLARANDO VARIABLES
    let contenedor_ambos=document.querySelector(".contenedor__login-register");
    let formulario_login=document.querySelector(".formulario__login");
    var formulario_register=document.querySelector(".form__register");
    let caja_trasera_login=document.querySelector(".caja__trasera-login");
    let caja_trasera_register=document.querySelector(".caja__trasera-register");

    if (window.innerWidth> 850) {
       /*  caja_trasera_login.display="block";
        caja_trasera_register.style="none"; */
 
    }else{
       caja_trasera_login.style.display="none"
    }
    register();
    IniciarSesion();
}
anchoPagina();
function IniciarSesion(){
    //DECLARANDO VARIABLES
    let contenedor_ambos=document.querySelector(".contenedor__login-register");
    let formulario_login=document.querySelector(".formulario__login");
    var formulario_register=document.querySelector(".form__register");
    let caja_trasera_login=document.querySelector(".caja__trasera-login");
    let caja_trasera_register=document.querySelector(".caja__trasera-register");

    if(window.innerWidth > 850){
    formulario_register.style.display= "none";
     contenedor_ambos.style.left= "10px";
    formulario_login.style.display= "block";
    caja_trasera_register.style.opacity="1";
    caja_trasera_login.style.opacity="0";
    }else{
        console.log("hola");
        formulario_register.style.display= "none";
        formulario_login.style.display= "block";
            caja_trasera_register.style.display="block"
            caja_trasera_login.style.display="none";
       /*  
        contenedor_ambos.style.left= "0px";
        formulario_login.style.display= "block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.opacity="0"; */

    }


    
}
function register(){
    //DECLARANDO VARIABLES
    let contenedor_ambos=document.querySelector(".contenedor__login-register");
let formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".form__register");
let caja_trasera_login=document.querySelector(".caja__trasera-login");
let caja_trasera_register=document.querySelector(".caja__trasera-register");
    if(window.innerWidth > 850){
        console.log(formulario_register);
    formulario_register.style.display= "block";
     contenedor_ambos.style.left= "410px";
    formulario_login.style.display= "none";
    caja_trasera_register.style.opacity="0";
    caja_trasera_login.style.opacity="1";
         }else{
           
            formulario_register.style.display= "block";
            formulario_login.style.display= "none";
            caja_trasera_login.style.display="block"
            caja_trasera_register.style.display="none"
           
            
         }
     


}
