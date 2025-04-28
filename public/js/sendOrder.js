

import {orders,resetTotalPrice,clearOrders} from './chargeDishesToCart.js'

const clientOrder = orders
const requestOrder = document.querySelector('.pay')

//Route::post('/order',[MeseroController::class,'order'])->name('meseroOrder');


requestOrder.addEventListener('click',sendData)

async function sendData(){
    const url = "http://127.0.0.1:8000/mesero/order"
    const method = "POST"
    const myHeaders = new Headers();
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    myHeaders.append("Content-Type","application/json")
    myHeaders.append("X-CSRF-TOKEN",token)
    try {
        //Si fuera GET
        //const response = await fetch(url);
        const details = document.querySelector('.detallePedido')
        const numMesa = document.querySelector('.numMesa')

        //Por ser post
        const response = await fetch(url,{
            method: method,
            headers: myHeaders,
            body: JSON.stringify(
                {
                    mesa: numMesa.value,
                    detalles: details.value || "",
                    data:Object.fromEntries(clientOrder)
                })
        })
        if(!response.ok){
            throw new Error(`Response status: ${response.status}`)
        }
        numMesa.value = "";
        details.value = "";
        clearOrders();
        const purchaseOrder = document.querySelector('.pedidos')
        purchaseOrder.innerHTML="";
        let totalPrice = document.querySelector('.totalPriceOrder')
        totalPrice.textContent="$0";
        resetTotalPrice()
        
        alert("ORDER SENT SUCESSFULLY");
        
    } catch (error) {
        console.error(error.message)
    }
}