function openProduct(event) {
    const id = event.dataset.id;
    location.replace("http://127.0.0.1:8000/product/" + id);
}
