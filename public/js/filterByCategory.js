
let category = document.querySelector('.category')


category.addEventListener('click',async (e)=>{
    const idCategory = category.getAttribute('id')
    const url = "http://127.0.0.1:8000/filterByCategory"
    const method = 'POST'
    try{
        const response = await fetch(url,{
            method: method,
            headers:'',
            body: JSON.stringify({'idCategory':idCategory})
        })
        if(!response.ok){
            throw new Error(`Response status: ${e.error})`)
        }
        
    }catch(error){

    }
})

