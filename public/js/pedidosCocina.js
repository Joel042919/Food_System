

let pedidosCocina = document.querySelector('.pedidosCocina')

pedidosCocina.addEventListener('click',async (e)=>{
    if(e.target.classList.contains('preparaPedido')){
        let orderCocina = e.target.closest('.orderCocina')
        orderCocina.style.boxShadow='2px 2px 3px 3px #9c55f2';
        orderCocina.setAttribute('estado',2);
        e.target.style.background="gray"
        e.target.style.pointerEvents='none';
    }else if(e.target.classList.contains('terminoPedido') && e.target.closest('.orderCocina').getAttribute('estado')){
        let element = e.target.closest('.orderCocina')
        
        //Deshabilitar el boton
        e.target.disabled = true;

        const url = `/cocinero/actualizarPedido/${element.dataset.idpedido}`
        
        const method = "PUT"
        const myHeaders = new Headers();
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        myHeaders.append("Content-Type","application/json")
        myHeaders.append("X-CSRF-TOKEN",token)
        myHeaders.append("Accept", "application/json"); // <-- Es buena práctica añadir esto para APIs Laravel
        try{
            const response = await fetch(url,{
                    method:method,
                    headers:myHeaders,
                    body:JSON.stringify({
                        estadoPedido:0
                    })
            });

            if(response.ok){
                //const data = response.json()
                element.style.transition = 'opacity 0.5s ease'
                element.style.opacity = '0'
                setTimeout(()=>element.remove(),500)
            } else {
                // Si hubo un error en el servidor (4xx, 5xx)
                console.error("Error del servidor:", response.status, response.statusText);
                const errorData = await response.json(); // Intenta leer el error
                console.error("Detalles:", errorData);
                alert("Hubo un error al actualizar el pedido.");
                // Habilitar el botón de nuevo si falló
                e.target.disabled = false;
                e.target.textContent = 'Terminado'; 
            }
        }catch(error){
            // Si hubo un error de red o de JavaScript
            console.error("Error de red o JS:", error);
            alert("Hubo un error de conexión al actualizar el pedido.");
            // Habilitar el botón de nuevo si falló
            e.target.disabled = false;
            e.target.textContent = 'Terminado';
        }
    }
})





