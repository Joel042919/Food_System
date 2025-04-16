

import {orders} from './chargeDishesToCart.js'

const clientOrder = orders
const requestOrder = document.querySelector('.pay')
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//Route::post('/order',[MeseroController::class,'order'])->name('meseroOrder');


requestOrder.addEventListener('click',sendData)

async function sendData(){
    const url = "http://127.0.0.1:8000/order"
    const method = "POST"
    const myHeaders = new Headers();
    myHeaders.append("Content-Type","application/json")
    myHeaders.append("X-CSRF-TOKEN",token)
    try {
        //Si fuera GET
        //const response = await fetch(url);

        //Por ser post
        const response = await fetch(url,{
            method: method,
            headers: myHeaders,
            body: JSON.stringify(Object.fromEntries(clientOrder))
        })
        if(!response.ok){
            throw new Error(`Response status: ${response.status}`)
        }

        console.log("ORDER SENT SUCESSFULLY");
        
    } catch (error) {
        console.error(error.message)
    }
}