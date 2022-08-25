const updateBtn = document.querySelectorAll('.update');
const deleteBtns = document.querySelectorAll('.delete'); // e.target input name=""

console.log(updateBtn);

updateBtn.forEach(element => {
    element.addEventListener('click', (e) => {
        let self = e.target;
        e.preventDefault();
        fetch('/cart/edit', {
            method: 'POST',
            body: new FormData(self.parentElement)
        })
        .then((response) => response.json())
        .then((data) => {
           self.parentElement.parentElement.childNodes[3].innerText =  'Quantity:' + data['result'];
        })
        .catch()
    });
});

deleteBtns.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault();
        fetch('/cart/delete/' + e.target.parentElement.childNodes[9].value)
        .then((response) => response.json())
        .then((data) => {
           if(data['result'] == 'deleted') {
            e.target.parentElement.parentElement.remove();
           }
        })
        .catch()
    })
});

const totalField = document.querySelector('.total');
totalField.innerHTML = 'total: ' + getTotal();

function getTotal() {
    const prices = document.querySelectorAll('.price');
    const quantities = document.querySelectorAll('.quantity');
    let total = 0;
    for(let i = 0; i < prices.length; i++) {
        const price = getPrice(prices[i]);
        const quantity = getQuantity(quantities[i]);
        total += price * quantity;
    }
    return total;
}

function getPrice(price) {
    return parseFloat(price.innerHTML.substring(13));
}

function getQuantity(quantity) {
    return parseFloat(quantity.innerHTML.substring(10));
}
