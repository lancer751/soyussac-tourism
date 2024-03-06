const menuLateral = document.querySelector('#menu-lateral');
const menuOpen = document.querySelector('#menu-open');
const menuClose = document.querySelector('#menu-close');
const body = document.querySelector('#body')
const menuLinks = document.querySelector('#nav-links')

menuLinks.querySelectorAll('a').forEach(linkPage => {
    linkPage.addEventListener('click', e=>{
        e.preventDefault();
        const urlPage = e.target.href;
        menuLateral.classList.add('-translate-y-full');
        body.classList.remove('overflow-y-hidden');

        setTimeout(() => {
        window.location.href = urlPage;
            
        }, 300);
    });
});

window.addEventListener('resize', e=>{
    if(window.innerWidth > 768){
        menuLateral.classList.add('-translate-y-full');
        body.classList.remove('overflow-y-hidden');
    }
})
  

menuOpen.addEventListener('click', ()=>{
    menuLateral.classList.remove('-translate-y-full');
    body.classList.add('overflow-y-hidden');
})

menuClose.addEventListener('click', ()=>{
    menuLateral.classList.add('-translate-y-full');
    body.classList.remove('overflow-y-hidden');
})