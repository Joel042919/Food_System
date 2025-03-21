

const radios = document.querySelectorAll(".cambio input[type='radio']")

radios.forEach(radio => {
    radio.addEventListener("click",() => añadirOcultar(radio))
});


function añadirOcultar(radio){
    let elements1 = document.querySelectorAll(".tipo1")
    let elements2 = document.querySelectorAll(".tipo2")
    if(radio.id==="1"){
        elements1.forEach(el =>{
            el.classList.remove("ocultar")
        })
        elements2.forEach(el =>{
            el.classList.add("ocultar")
        })
    }else if(radio.id==="2"){
        elements1.forEach(el =>{
            el.classList.add("ocultar")
        })
        elements2.forEach(el =>{
            el.classList.remove("ocultar")
        });
    }
}