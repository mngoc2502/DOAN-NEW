const apiUrl = 'http://localhost:8000';
var table = document.querySelector('#phongHat table');
var tbody = table.querySelector('tbody');

fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        var rows = data.map(item => {
            return `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.room_name}</td>
                    <td>${item.hour}</td>
                    <td>${item.total}</td>
                    <td>${item.last_total}</td>
                    <td>${item.price}</td>
                </tr>
            `;
        });
        
        tbody.innerHTML = rows.join('');
    })
    .catch(error => {
        console.error('Lỗi khi tải dữ liệu từ API:', error);
    });