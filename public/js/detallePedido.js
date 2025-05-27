
const bodyTabla = document.querySelector('.bodyTabla')
const detallePago = document.querySelector('.detallePago')

bodyTabla.addEventListener('click',async (e)=>{
    if(e.target.tagName === 'BUTTON' && e.target.classList.contains('verDetallePago')){
        let button = e.target
        let pedidos = await fetch(`http://127.0.0.1:8000/cajero/factura/${button.getAttribute('data-idPedido')}`)
        let datosPedidos = await pedidos.json()
        verDetallePago(datosPedidos)
    }
})


function verDetallePago(datosPedidos) {
    let html = `
        <h2>Detalle del Pedido #${datosPedidos.idPedido}</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre Plato</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
    `
    let total = 0

    datosPedidos.detalle_pedido.forEach(detalle => {
        const nombrePlato = detalle.pedido_delivery?.dishName ?? 'Sin nombre'
        
        const precio = Number(detalle.price)
        const cantidad = detalle.quantity
        const subtotal = precio * cantidad
        total += subtotal

        html += `
            <tr>
                <td>${nombrePlato}</td>
                <td>S/. ${precio.toFixed(2)}</td>
                <td>${cantidad}</td>
                <td>S/. ${subtotal.toFixed(2)}</td>
            </tr>
        `
    })

    html += `
            </tbody>
        </table>
        <h3>Total a pagar: S/. ${total.toFixed(2)}</h3>
        <button id="confirmarPago" data-idPedido="${datosPedidos.idPedido}" data-total="${total.toFixed(2)}">Confirmar Pago</button>
    `

    detallePago.innerHTML = html
}


detallePago.addEventListener('click', async (e) => {
    if (e.target.id === 'confirmarPago') {
        const idPedido = e.target.getAttribute('data-idPedido')
        const total = e.target.getAttribute('data-total')
        
        const confirmacion = confirm(`¿Deseas confirmar el pago de S/. ${total}?`)
        if (!confirmacion) return;

        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        
        try {
            const response = await fetch('http://127.0.0.1:8000/cajero/pagar', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify({
                    idPedido: idPedido,
                    montoAPagar: total,
                    idTipoPago: 1  // Por ahora fijo
                })
            });
    
            const data = await response.json()


            if (response.ok) {
                alert('¡Pago registrado exitosamente!')
                location.reload()
            }
    
            
        } catch (error) {
            alert('Hubo un error al registrar el pago')
        }
    }
})
