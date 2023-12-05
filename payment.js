function updateTotalPrice() {
    var rows = document.querySelectorAll('table tr[data-food-code]');

    var totalPrice = 0;

    rows.forEach(function (row) {
        var quantity = parseInt(row.querySelector('input[type="number"]').value) || 0;
        var price = parseFloat(row.querySelector('td#price').textContent) || 0;
        var totalForRow = quantity * price;

        row.querySelector('td#total-price').textContent = totalForRow;

        totalPrice += totalForRow;
    });

    const totalElements = document.querySelectorAll("#total");
    totalElements.forEach(function(element) {
        element.textContent = totalPrice;
    });

    const price_time = parseFloat(document.getElementById('price-time').textContent.trim());
    const totalBill = price_time + totalPrice;
    document.getElementById("total-bill").textContent = totalBill;

}