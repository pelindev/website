let services = document.getElementsByClassName('services-block')
let aboutHeader = document.getElementById('about-header')
let aboutImg = document.getElementById('about-img')
let hrServices = document.querySelector('.hr_1')
console.log(hrServices)

window.addEventListener('scroll', function(){
    // console.log(pageYOffset)
    if (pageYOffset > 200){
        services[0].classList.add('services-rotate')
        services[services.length-1].classList.add('services-rotate')
    }
    
    if (pageYOffset > 400){
        hrServices.classList.add('hr_animate')

    }

    if (pageYOffset > 1270){
        aboutHeader.classList.add('about-header-animate')
        aboutImg.classList.add('about-img-animate')
    }
})


