

const carousel = document.querySelector(".carousel")
const arrowBtns = document.querySelectorAll('.botonMando button')
const firstCardWidth = carousel.querySelector('.cards').offsetWidth

arrowBtns.forEach(btn =>{
    btn.addEventListener("click", ()=>{
        console.log(firstCardWidth)
        carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    })
})