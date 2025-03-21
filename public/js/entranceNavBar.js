
const menuNavbar = document.querySelector('.menuNavbar')
const navbar = document.querySelector('.navbar')
const shadows =document.querySelector('.shadows')
const closeBurguer = document.querySelector('.closeBurguer')
const body = document.querySelector('body')

menuNavbar.addEventListener('click',(e)=>{
    navbar.style.display = 'block'
    shadows.style.display = 'block'
})

closeBurguer.addEventListener('click',(e)=>{
    navbar.style.display = 'none'
    shadows.style.display = 'none'
})

shadows.addEventListener('click',()=>{
    navbar.style.display = 'none'
    shadows.style.display = 'none'
})


