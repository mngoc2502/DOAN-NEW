<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Chi tiết hóa đơn</title>
</head>

<body>
    <?php
    include './config.php';
    if (isset($_GET['billid'])) {
        $billId = $_GET['billid'];

        $query = "SELECT * FROM bill WHERE bill_id = '$billId'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="container-sm">';
                echo '<h3>CHI TIẾT HÓA ĐƠN PHÒNG '.$row['room_id'].'</h3>';
                echo '<p>Hóa đơn ngày: '.$row['bill_date'].'</p>';
                echo '<p>Thời gian thuê: '.$row['start_time'].'</p>';
                echo '<p>Thời gian trả phòng: '.$row['end_time'].'</p>';
                echo '<table class="table table-striped table-hover">
                        <tr>
                            <th>Sản phẩm</th>
                        </tr>
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tra chanh</td>
                            <td>4</td>
                            <td>11.000đ</td>
                            <td>44.000đ</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-end">Tổng</th>
                            <td>44.000đ</td>
                        </tr>
                    </table>';
                echo '</div>';
            }
        }
    } else {
        echo 'No Bill ID provided.';
    }
    ?>
</body>

</html>