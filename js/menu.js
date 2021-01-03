var btnMenu = document.getElementById("btnMenu");
var menu = document.getElementById("IdMenu");
btnMenu.addEventListener('click', function(){//cuando se le de click a la btnMenu, al elemento IdMenu se la va a aplicar la clase classList.toggle si no la tiene
    'use strict';
    menu.classList.toggle('mostrar');//classList: que se va a agregar una clase. toggle: se puede intercalar, si tiene la clase se la va a quitar, sino tiene la clase que se va a aplicar en el momento, se la asigna.
});
