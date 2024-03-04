const menuLateral = document.querySelector('#menu-lateral');
const menuOpen = document.querySelector('#menu-open');
const menuClose = document.querySelector('#menu-close');
const body = document.querySelector('#body')

menuOpen.addEventListener('click', ()=>{
    menuLateral.classList.remove('-translate-y-full');
    body.classList.add('overflow-y-hidden');
})

menuClose.addEventListener('click', ()=>{
    menuLateral.classList.add('-translate-y-full');
    body.classList.remove('overflow-y-hidden');
})