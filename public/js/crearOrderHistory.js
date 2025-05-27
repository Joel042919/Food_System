

const cardsHistory = document.querySelector('.cardsHistory')



async function getHistory(){
    const rpta = await fetch('http://127.0.0.1:8000/cajero/getOrderHistory')
    let message = await rpta.json()
    return message;
}


//Crear ordenes
getHistory()
    .then(orders => crearCards(orders))


//Ver detalle Pedido
cardsHistory.addEventListener('click',(e)=>{
    if(e.target.tagName==='BUTTON' && e.target.classList.contains('verDetalle')){
        let cardHistory = e.target.closest(".cardHistory")
        let detalle = cardHistory.querySelector('.detallePedido')
        detalle.classList.toggle('hidde')
        e.target.textContent = e.target.textContent==='Ver detalle' ? 'Ocultar detalle' : 'Ver detalle'
    }
})


function crearCards(orders){
    const resumenes = document.querySelector('.resumenes .totalMoney')
    let totalMoney = 0

    const contenedor = document.querySelector('.cardsHistory')

    for(let order of orders){
        //Card principal
        let cardHistory = document.createElement('article')
        cardHistory.classList.add('cardHistory')

        //Encabezado
        const encabezado = document.createElement('div');
        encabezado.classList.add('encabezado');
        encabezado.innerHTML = `
            <h3>ID: ${order.idPedido}</h3>
            <span>idMesa: ${order.idMesa}</span>
        `;

        //Cliente
        const cliente = document.createElement('div')
        cliente.classList.add('cliente')
        cliente.innerHTML = `
            <label for="nombreCliente">Nombre Cliente</label>
            <span id="nombreCliente">Joel Rodriguez Muñoz</span>
            <span>${order['fechaPedido']}</span>
        `;

        //Boton
        const boton = document.createElement('button');
        boton.classList.add('verDetalle');
        boton.textContent = 'Ver detalle';


        //Pagar boton
        const pagarBoton = document.createElement('button')
        pagarBoton.classList.add('pagarOrder')
        pagarBoton.textContent = 'Pagar Orden'

        //Detalle oculto
        let totalPrice = 0
        const detalleDiv = document.createElement('div');
        detalleDiv.classList.add('detallePedido', 'hidde');

        const table = document.createElement('table');

        const thead = document.createElement('thead');
        thead.innerHTML = `
            <tr>
                <th>Plato</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        `;

        const tbody = document.createElement('tbody');
        for (let detalle of order.detalle_pedido) {
            const fila = document.createElement('tr');
            totalPrice+=Number(detalle.price)*Number(detalle.quantity)
            totalMoney+=totalPrice
            fila.innerHTML = `
                <td>${detalle.idDishes}</td>
                <td>${detalle.price}</td>
                <td>${detalle.quantity}</td>
            `;
            tbody.appendChild(fila);
        }

        table.appendChild(thead);
        table.appendChild(tbody);
        detalleDiv.appendChild(table);


        //Total
        const total = document.createElement('span')
        total.textContent = `Total: s/${totalPrice}`

        cardHistory.appendChild(encabezado)
        cardHistory.appendChild(cliente)
        cardHistory.appendChild(total)
        cardHistory.appendChild(boton)
        cardHistory.appendChild(detalleDiv)
        contenedor.appendChild(cardHistory)
    }
    
    resumenes.textContent = totalMoney
}


