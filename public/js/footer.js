let footer = document.querySelector('#popup')
let ok_btn = document.querySelector('#btn-ok')

//ok btn in newsletter function
ok_btn.onclick = () => {
    footer.classList.remove('show');
    footer.classList.add('hide');  
}