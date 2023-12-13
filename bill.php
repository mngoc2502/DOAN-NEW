<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
        <h3 style="margin-top: 40px" >HOÁ ĐƠN</h3>
        <p id="date">Hóa đơn ngày: </p>
        <p id="time">Thời gian thuê: </p>
        <p id="price-time">Tiền thuê phòng: </p>
        <p>Sản phẩm</p>
        <table class="table table-striped table-hover" id="foodTable">
            <tr >
                <td colspan="3"></td>
                <td><strong>Tổng cộng:</strong></td>
                <td><span id="total_bill"></span></td>
            </tr>
        </table>
    </div>
    <script>
        const foodData = JSON.parse(localStorage.getItem("foodData"));
        const billData = JSON.parse(localStorage.getItem("billData"));
        const currentDate = new Date();
        const date = document.getElementById("date");
        date.textContent = date.textContent + currentDate.getDate() + "-" + (currentDate.getMonth() + 1)+ "-"+ currentDate.getFullYear();
        const time = document.getElementById("time");
        time.textContent = time.textContent + billData.time;
        const price_time = document.getElementById("price-time");
        price_time.textContent = price_time.textContent + billData.price_time + ' VND';
        const foodTable = document.getElementById("foodTable");
        const headerRow = foodTable.insertRow(0);
            headerRow.innerHTML = '<th>STT</th><th>Sản phẩm</th><th>Số lượng</th><th>Giá</th><th>Thành tiền</th>';
        foodData.forEach((item, index) => {
            const row = foodTable.insertRow(index + 1);
            row.innerHTML = `<td>${item.STT}</td><td>${item.food_name}</td><td>${item.quantity}</td><td>${item.price} VND</td><td>${item.total_price} VND</td>`;
        });
        const total_bill = document.getElementById("total_bill");
        total_bill.textContent = billData.total_bill +" VND";
        window.print();
    </script>
</body>
</html>