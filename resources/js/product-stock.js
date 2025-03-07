document.addEventListener('DOMContentLoaded', function() {
    const sizeSelector = document.getElementById('product-size');
    
    if (sizeSelector) {
        sizeSelector.addEventListener('change', function() {
            const size = this.value;
            const articleNumber = document.getElementById('article-number');
            const articleNumberValue = articleNumber.getAttribute('data-article');
            console.log(articleNumberValue);
            
            fetch(`/products/${articleNumberValue}/stock/${size}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('stock-display').textContent = data.stock;
                })
                .catch(error => console.error('Error fetching stock information:', error));
        });
    }
});