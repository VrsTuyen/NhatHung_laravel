// const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

let currentImg = 0

var circle = $$('.circle')

const slide = document.querySelector('.home-slide-wrapper')

const sliderItems = $$('.home-slide-wrap')

let slideImageWith = sliderItems[0].offsetWidth

let position = 0;

let index = 0;

function handleSlide(){
   
    if (index >= sliderItems.length){
        index = 0
        position = 0;
    }
    position = index *( -  slideImageWith)
    slide.style = `transform: translateX(${position}px)`
    document.querySelector('.circle.active').classList.remove('active')
    circle[index].classList.add('active')
    index ++
}

setInterval(function () {
    handleSlide();
}, 3500)

circle.forEach((element) => {
    element.addEventListener('click', () => {
        index = element.dataset.image
        handleSlide()
    })
})

window.addEventListener("resize", () => {
    slideImageWith = sliderItems[0].offsetWidth
});