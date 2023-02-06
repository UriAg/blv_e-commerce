//Vars and objects
const slider =document.querySelector('#slider');
const indicators = document.querySelectorAll('.indicators button');
let sliderSection = document.querySelectorAll('.slider__section');
let sliderSectionLast = sliderSection[sliderSection.length - 1];

const btnPrev = document.querySelector('.btn__control--prev');
const btnNext = document.querySelector('.btn__control--next');

//Indicators changes
let sliderIndicator = document.querySelectorAll('.slider__indicator');
let sliderIndicatorLast = sliderIndicator[sliderIndicator.length - 1];
let i=0;
sliderIndicator[i].classList.add('active');


//Prev & Next actions
slider.insertAdjacentElement("afterbegin", sliderSectionLast);
btnNext.addEventListener('click', () => {
    next();
})
btnPrev.addEventListener('click', () => {
    previous();
})

//Functions
function next() {
//Indicator
    let sliderIndicator = document.querySelectorAll('.slider__indicator');
    for( let i of sliderIndicator){
        if(i.classList.contains('active')){
            i.classList.remove('active');
        }
    }
    i++;
    if(i===5){
        i=0
    }
    sliderIndicator[i].classList.add('active');

//Slider
    let sliderSectionFirst = document.querySelectorAll('.slider__section')[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all .3s ease";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement("beforeend", sliderSectionFirst);
        slider.style.marginLeft = "-100%";
    }, 300)
}

function previous(){

//Indicator
    let sliderIndicator = document.querySelectorAll('.slider__indicator');
    
    sliderIndicator[i].classList.remove('active');
    i--;
    if(i===-1){
        i=4
    }
    sliderIndicator[i].classList.add('active');


//Slider
    let sliderSection = document.querySelectorAll('.slider__section');
    let sliderSectionLast = sliderSection[sliderSection.length - 1];

    slider.style.marginLeft = "0";
    slider.style.transition = "all .5s ease";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement("afterbegin", sliderSectionLast);
        slider.style.marginLeft = "-100%";
    }, 500)
}

//Changes interval
setInterval(function(){
    next();
}, 15000);

//Image replacement of slider depending on the screen
const imagenes = document.getElementsByClassName('slider__img');
if(window.screen.width <= 600){
    imagenes[1].src = "./assets/bg/paf-1.jpg";
    imagenes[2].src = "./assets/bg/bf-2.jpg";
    imagenes[3].src = "./assets/bg/DSC_0299.JPG";
    imagenes[4].src = "./assets/bg/tf-4.jpg";
    imagenes[0].src = "./assets/bg/uf-5.jpg";
}
/*Author: Uriel Agüero*/