document.querySelector('.burger-btn').onclick = function() {
    document.querySelector('.burger-btn').classList.toggle('burger-btn_active')
    let items = document.getElementsByClassName('menu-item')
    for (i=0; i<items.length; i++) {
        items[i].classList.toggle('menu_hide')
    }
}
