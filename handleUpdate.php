<?php
include "./config.php";

// Xử lý yêu cầu POST từ máy khách
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu cập nhật từ máy khách
    $id = $_POST['id'];
    $column1 = $_POST['column1'];
    $column2 = $_POST['column2'];
    $column3 = $_POST['column3'];
    $column4 = $_POST['column4'];
    $column5 = $_POST['column5'];


    // Thực hiện truy vấn cập nhật trong cơ sở dữ liệu
    $sql = "UPDATE food SET food_name = '$column1', quantity = '$column2', quantity_sold = '$column3', quantity_remain = '$column4', price = '$column5' WHERE food_code = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cập nhật dữ liệu thành công')</script>";
    } else {
        echo "<script>alert('";
        echo $conn->error;
        echo "')</script>";
    }
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>