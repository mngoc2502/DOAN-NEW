function deleteRow(foodCode) {
    if (confirm('Bạn chắc chắn muốn xóa sản phẩm này')) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'tongquan.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                var rowToDelete = document.querySelector('tr[data-food-code="' + foodCode + '"]');
                if (rowToDelete) {
                    rowToDelete.remove();
                }
            } else {
                console.error('Error deleting row:', xhr.responseText);
            }
        };
        xhr.send('delete_row=' + encodeURIComponent(foodCode));
    }
}