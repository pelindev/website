export default function burgerMenu() {
    $('.burger-btn').on('click', function() {
        $('.burger-btn').toggleClass('burger-btn_active');
        $('.menu-item').toggleClass('menu_hide');
    }); 
};