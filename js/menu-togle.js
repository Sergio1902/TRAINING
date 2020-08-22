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
