$(document).ready(function(){

    // MENU

    let menuTogle = document.querySelector('.hamburguesa')
    let menuTogleIcon = document.querySelector('.hamburguesa i')
    let menu = document.getElementById('menu')

    menuTogle.addEventListener('click', function (e) {    
    menu.classList.toggle('show')

    if(menu.classList.contains('show')){
        menuTogleIcon.setAttribute('class', 'fas fa-times')
    }else{
        menuTogleIcon.setAttribute('class', 'fas fa-bars')
    }
    })

    // MENU AL SECCION
    
    jQuery("header .main-container nav a").click(function(){
        
        menu.classList.remove('show')
        var seleccionado = jQuery(this).attr("href")
        jQuery("html, body").animate({
            "scrollTop": jQuery(seleccionado).offset().top -50
        })
    })






});