export default function animatePage() {
    var services = $('.services-block'),
        aboutHeader = $('#about-header'),
        aboutImg = $('#about-img'),
        hrServices = $('.hr_1');

    window.addEventListener('scroll', function(){
        if(pageYOffset > 200) {
            services.first().addClass('services-rotate');
            services.last().addClass('services-rotate');
        };

        if (pageYOffset > 400){
            hrServices.addClass('hr_animate');
        };

        if (pageYOffset > 1270){
            aboutHeader.addClass('about-header-animate');
            aboutImg.addClass('about-img-animate');
        };
    });
};

