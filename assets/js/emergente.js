
var btnAbrir= document.querySelector('#popup'),
    overlay=document.querySelector('#overlay'),
    overpop=document.querySelector('#overpop'),
    btnCerrar=document.querySelector('#btn_cerrar');

    btnAbrir.addEventListener('click', function () {
        overlay.classList.remove('inactive');
        overlay.classList.add('active');
        
        console.log(overlay);
        overpop.classList.add('active');
        window.onscroll= null;
    })
    btnCerrar.addEventListener('click', function () {
        overlay.classList.add('inactive');
        overlay.classList.remove('active');
        overpop.classList.remove('active');
    })
  

