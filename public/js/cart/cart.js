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
