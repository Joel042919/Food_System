

const cardsHistory = document.querySelector('.cardsHistory')



async function getHistory(){
    const rpta = await fetch('http://127.0.0.1:8000/cajero/getOrderHistory')
    let message = await rpta.json()
    return message;
}


function crearCardsHistory(){
    

    //Detalle Pedido
    cardsHistory.addEventListener('click',(e)=>{
        /*if(e.target.tagName==='DIV' e.target.classList.toggle('hidde')){

        }*/
    })
}

getHistory()



