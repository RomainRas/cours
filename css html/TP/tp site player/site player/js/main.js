window.onload = function(){
    const menu = document.querySelector('#menu-global');
    const btnMenu = menu.children[0];
    btnMenu.addEventListener('click',()=>{
        menu.classList.toggle('open');
    });
}