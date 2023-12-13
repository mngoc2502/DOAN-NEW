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

    const totalElements = document.querySelectorAll("#total-food");
    totalElements.forEach(function(element) {
        element.textContent = totalPrice;
    });

    const price_time = parseFloat(document.getElementById('price-time').textContent.trim());
    const totalBill = price_time + totalPrice;
    document.getElementById("total-bill").textContent = totalBill;

}

function clearAllInputs() {
    const inputElements = document.querySelectorAll('input[type="number"]');
    inputElements.forEach((input) => {  
        input.value = '';
    });

    const totalElements = document.querySelectorAll("#total-food");
    totalElements.forEach(function(element) {
        element.textContent = 0;
    });
    document.getElementById("total-bill").textContent = 0;
    const totalPriceElements = document.querySelectorAll('#total-price');
    totalPriceElements.forEach((totalPriceElement) => {
        totalPriceElement.innerText = '0';
    });
}
function print_Bill() {
    var table = document.getElementById('product-table');
    if (!table) {
        console.error('Table not found!');
        return;
    }

    var rows = table.getElementsByTagName('tr');
    var foodData = [];

    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName('td');
        if (cells.length >= 5) {
            var input = cells[2].querySelector('input');
            if (input) {
                var quantity = parseInt(input.value);
                if (!isNaN(quantity) && quantity !== 0) {
                    var rowData = {
                        'STT': cells[0].innerText,
                        'food_name': cells[1].innerText,
                        'quantity': quantity,
                        'price': cells[3].innerText,
                        'total_price': cells[4].innerText
                    };
                    foodData.push(rowData);
                }
            }
        }
    }


    const time = document.getElementById("time").textContent;
    const price_time = document.getElementById("price-time").textContent;
    const total_food = document.getElementById("total-food").textContent;
    const total_bill = document.getElementById("total-bill").textContent;

    var billData = {
        'time': time,
        'price_time': price_time,
        'total_food': total_food,
        'total_bill': total_bill
    }
    localStorage.setItem("foodData",JSON.stringify(foodData));
    localStorage.setItem("billData",JSON.stringify(billData));
    window.open('bill.php', '_blank');
    window.location.href = `tongquan.php`;
}
