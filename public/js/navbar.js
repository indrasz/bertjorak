let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let alert = document.querySelector('.alert');
let xbutton = document.querySelector('#close-icon');

//fungsi untuk navbar responsive
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

//fungsi untuk sticky navbar
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0); 
})

//untuk perpindahan nav item yang active
const currentLocation = location.href;
const menuItem = document.querySelectorAll('ul.navbar li.nav-item a');
const menuLength = menuItem.length
for (let i=0; i<menuLength; i++){
    if(menuItem[i].href === currentLocation) {
        menuItem[i].className = "nav-link active"
    }
}

xbutton.onclick = () => {
    alert.classList.remove('show');
    alert.classList.add('hide');  
}


