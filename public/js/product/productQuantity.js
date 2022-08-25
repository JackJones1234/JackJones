function addQuantity(val){
    let existingValue = document.getElementById('quantity').value;
    if(existingValue == 100){
        return;
    }
    let finalValue = parseInt(existingValue) + 1;
    document.getElementById('quantity').value = finalValue;
}
function removeQuantity(val){
    
    let existingValue = document.getElementById('quantity').value;
    if(existingValue == 1){
        return;
    }
    let finalValue = parseInt(existingValue) - 1;
    document.getElementById('quantity').value = finalValue;
}