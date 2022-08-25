const updateBtn = document.querySelectorAll('.update');
// const forms = document.querySelectorAll('form');
const atags = document.querySelectorAll('.delete'); // e.target input name=""

console.log(updateBtn);
updateBtn.forEach(element => {
    element.addEventListener('click', (e) => {
        let self = e.target;
        // console.log(self.parentElement);
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

atags.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault();
        fetch(e.target.href)
        .then((response) => response.json())
        .then((data) => {
           if(data['result'] == 'deleted') {
            e.target.parentElement.remove();
           }
        })
        .catch()
    })
});