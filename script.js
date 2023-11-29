var menu = document.getElementById('menu');
var header = document.querySelector('header');
var isOpen = false;

menu.addEventListener('click', function () {
    menu.classList.toggle('fa-times');
    header.classList.toggle('toggle');

    if (isOpen) {
        header.style.left = '0%'
    }
    else {
        header.style.left = '-120%'
       
    }

    isOpen = !isOpen
});

