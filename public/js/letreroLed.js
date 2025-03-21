
let items = document.querySelectorAll('.item')

const root = document.documentElement
const duration = getComputedStyle(root).getPropertyValue("--duration-animation-infinite-scroller")


const count = items.length


items.forEach(
    (item)=>{
        const itemNumber = item.getAttribute("item-number");
        item.style.animationDelay = `calc(${duration} / ${count} * (${count} - ${itemNumber}) * -1 )`
    }
)

