const dishes = document.querySelector('.containerAll')
const purchaseOrder = document.querySelector('.pedidos')
export const orders = new Map()
let totalPriceOrder = 0
dishes.addEventListener('click',(e)=>{
    if(e.target.tagName==='BUTTON'){
        let element = e.target.closest('.dish')
        let id = element.dataset.id
        if(orders.has(id)){
            addRemoveQuantity(id,true)
        }else{
            let details = element.querySelectorAll('.details span')
            let name = details[0].textContent
            let price = details[1].textContent
            let img = element.querySelector('img').src
            orders.set(id,{name:name,img:img,price:parseInt(price), quantity:1})
            renderCart(id)
            sumTotalOrder(parseInt(price))
        }
    }
})

function renderCart(idProduct){
    let order = orders.get(idProduct)

    //Order Item div
    let orderItem = document.createElement('div')
    orderItem.classList.add('orderItem')
    orderItem.setAttribute('data-id',idProduct)

    //Image
    let img = new Image()
    img.src = order['img']

    //Span name
    let name = document.createElement('span')
    name.textContent = order['name']

    //Span price
    let price = document.createElement('span')
    price.classList.add('totalPrice')
    price.textContent = order['price']

    //addQuantity div
    let addQuantity = document.createElement('div')
    addQuantity.classList.add('addQuantity')

    //minus button
    let MinusButton = document.createElement('button')
    MinusButton.classList.add('remove')
    MinusButton.textContent = '-'

    //amount span
    let amount = document.createElement('span')
    amount.classList.add('amount')
    amount.textContent = order['quantity']

    //add button
    let addButton = document.createElement('button')
    addButton.classList.add('add')
    addButton.textContent='+'

    addQuantity.appendChild(MinusButton)
    addQuantity.appendChild(amount)
    addQuantity.appendChild(addButton)

    orderItem.appendChild(img)
    orderItem.appendChild(name)
    orderItem.appendChild(price)
    orderItem.appendChild(addQuantity)

    purchaseOrder.appendChild(orderItem)
}

function modifyQuantity(id){
    let order = orders.get(id)
    let itemsOrder = Array.from(purchaseOrder.querySelectorAll('.orderItem'))
    itemsOrder.find((item)=>{
        if(item.dataset.id===id){
            item.querySelector('.addQuantity .amount').textContent=order['quantity']
        }
    })
}

function addRemoveQuantity(id,option){
    let order = orders.get(id)
    if(option){
        order["quantity"]+=1
        sumTotalOrder(order["price"])
    }else{
        if(order["quantity"]>1){
            order["quantity"]-=1
            sumTotalOrder(-order["price"])
        }
    }
    modifyQuantity(id)
}

purchaseOrder.addEventListener('click',(e)=>{
    if(e.target.tagName==='BUTTON'){
        let id = e.target.closest('.orderItem').dataset.id
        if(e.target.classList.contains('add')){
            addRemoveQuantity(id,true)
        }else if(e.target.classList.contains('remove')){
            addRemoveQuantity(id,false)
        }
    }
})


function sumTotalOrder(price){
    let totalPrice = document.querySelector('.totalPriceOrder')
    totalPriceOrder += price
    /*let cleanFormatPrice = totalPrice.textContent.trim().substring(1,totalPrice.textContent.length)
    
    let pastPrice = parseInt(cleanFormatPrice)*/
    totalPrice.textContent = `$${totalPriceOrder}`
    let pay = document.querySelector('.pay')
    pay.dataset.price=totalPriceOrder
    /*let total = 0
    for(const order of orders){
        total += order[1]["price"]*order[1]["quantity"]
    }*/
}
