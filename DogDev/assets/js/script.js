//select opener
let menuOpener = document.querySelector('.menu-opener');
//select nav inside header
let nav = document.querySelector('header nav');
//create listener for even click in menuOpener
menuOpener.addEventListener('click', ()=>{
    //remove
    if(nav.classList.contains('opened')){
        nav.classList.remove('opened');
        menuOpener.querySelector('.close-icon').computedStyleMap.display='none';
        menuOpener.querySelector('.hambuergers-icon').computedStyleMap.display='flex';
    }else{
        //contrario do if , add
        nav.classList.add('opened');
        menuOpener.querySelector('.close-icon').computedStyleMap.display='flex';
        menuOpener.querySelector('.hambuergers-icon').computedStyleMap.display='none';
    }
});
