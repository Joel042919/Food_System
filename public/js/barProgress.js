



const bar = document.querySelectorAll('.bar')



let delicious = ['No', 'Yes', 'not', 'yes', 'Yes', 'not', 'yes', 'yes', 'yes', 'not', 'yes', 'yes', 'yes', 'yes', 'Yes', 'yes', 'yes', 'YES', 'yes', 'YES', 'Yes', 'YES', 'yes', 'Yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Yes', 'yes', 'yes', 'yes', 'yes']

let cheap = ['No', 'Yes', 'not', 'yes', 'Yes', 'not', 'yes', 'yes', 'not', 'not', 'yes', 'yes', 'yes', 'yes', 'not', 'yes', 'yes', 'YES', 'yes', 'YES', 'not', 'YES', 'yes', 'Yes', 'yes', 'yes', 'yes', 'YES', 'yes', 'yes', 'YeS', 'yes', 'yes', 'yes', 'yes', 'Yes', 'yes', 'yes', 'yes', 'yes']

function setPorcentageProgressBar(){
    bar.forEach(
        (e)=>{
            if(e.id==="bar1"){
                let percentage = counter(delicious)
                
                let progress = e.querySelector('.progress')
                let valueTag = e.querySelector('.value')

                progress.style.width = `${percentage}%`
                valueTag.textContent = `${ percentage }%`
            }else if(e.id==="bar2"){
                let percentage = counter(cheap)
                
                let progress = e.querySelector('.progress')
                let valueTag = e.querySelector('.value')

                progress.style.width = `${percentage}%`
                valueTag.textContent = `${ percentage }%`
            }
        }
    )
}


function counter(iterableP){
    let countYes = 0
    iterableP.map(
        (e)=>{
            if(e.toLowerCase()==="yes"){
                countYes+=1
            }
        }
    )
    let percentage = Math.round((countYes / iterableP.length)*100)
    return percentage
}

// Crear el observador (Intersection Observer API)
// En la función anónima se recibe una lista de entradas,
//    no importa que solo se observe un elemento
let observer = new IntersectionObserver(entries =>{
    //Recorrer las entradas recibidas
    entries.forEach(entry=>{
        //Esta visible en el viewport
        if(entry.intersectionRatio>0){
            //entry.target.classList.add('animate');
            setPorcentageProgressBar()
            //Dejar de observar
            observer.unobserve(entry.target)
        }
    })
})

observer.observe(document.querySelector('.final'))


/* MENU BURGUER */
let links = document.querySelector(".links")
let menu = document.querySelector(".menu")

menu.addEventListener("click",()=>{
    links.classList.toggle("hideElement")
})
