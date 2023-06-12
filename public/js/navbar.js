let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let alert = document.querySelector('.alert');
let alert_visitor = document.querySelector('#popup-visitor')
let xbutton = document.querySelector('#close-icon');
let xbutton_visitor = document.querySelector('#close-icon-visitor')

if (!sessionStorage.getItem('#popup')) {
    // Show the visitor popup if it hasn't been seen before
    alert_visitor.classList.add('show');

    // Set sessionStorage item to indicate the popup has been seen
    sessionStorage.setItem('#popup', 'true');
} else {
    alert_visitor.classList.add('hide');
}

//fungsi untuk navbar responsive
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

//fungsi untuk sticky navbar
window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

//untuk perpindahan nav item yang active
const currentLocation = location.href;
const menuItem = document.querySelectorAll('ul.navbar li.nav-item a');
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = "nav-link active"
    }
}

xbutton_visitor.onclick = () => {
    alert_visitor.classList.remove('show');
    alert_visitor.classList.add('hide');
}

xbutton.onclick = () => {
    alert.classList.remove('show');
    alert.classList.add('hide');
}



