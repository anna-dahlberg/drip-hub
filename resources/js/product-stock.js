document.addEventListener('DOMContentLoaded', function() {
    const sizeSelector = document.getElementById('product-size');
    
    if (sizeSelector) {
        sizeSelector.addEventListener('change', function() {
            const size = this.value;
            const articleNumber = sizeSelector.dataset.articleNumber;
            
            fetch(`/products/${articleNumber}/stock/${size}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('stock-display').textContent = data.stock;
                })
                .catch(error => console.error('Error fetching stock information:', error));
        });
    }
});