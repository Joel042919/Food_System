

const menuButton = document.querySelector(".menu");
const links = document.querySelector(".links");
const overlay = document.querySelector(".overlay");
const body = document.body

menuButton.addEventListener("click",function(){
    links.classList.toggle("hideElement")
    overlay.classList.toggle("hideOverlay");
    body.classList.toggle("no-scroll")
});

overlay.addEventListener("click", function(){
    links.classList.add("hideElement");
    overlay.classList.add("hideOverlay");
    body.classList.remove("no-scroll")
});


