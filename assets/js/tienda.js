let x= document.querySelectorAll('.contain');
let clase= document.querySelector('.clase');
var titulo= document.querySelector('#titulo');

x.forEach(x => {
    x.classList.add('medida');

});
if(clase){
    titulo.textContent="Sugerencias"
}else{
    titulo.textContent="Catalogo"
}
