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
                echo '<h3 style="margin-top: 40px" >CHI TIẾT HÓA ĐƠN PHÒNG '.$row['room_id'].'</h3>';
                echo '<p>Hóa đơn ngày: '.$row['bill_date'].'</p>';
                echo '<p>Thời gian thuê: '.$row['start_time'].'</p>';
                echo '<p>Thời gian trả phòng: '.$row['end_time'].'</p>';
                echo '<p>Tổng thời gian thuê phòng: '. $row['total_hours'] .' giờ</p>';
                echo '<table class="table table-striped table-hover">
                    <tr>
                    <th>Sản phẩm</th>
                    </tr>';
                echo '<tr>';
                echo '<th>STT</th>';
                echo '<th>Sản phẩm</th>';
                echo '<th>Số lượng</th>';
                echo '<th>Giá</th>';
                echo '<th>Thành tiền</th>';
                echo '</tr>';
                $query1 = "SELECT * FROM bill_details WHERE bill_id = '$billId'";
                $result1 = mysqli_query($conn, $query1);
                if(mysqli_num_rows($result1) > 0){
                    $total_price = 0;
                    while($row1 = mysqli_fetch_assoc($result1)){
                           echo '<tr>';
                                echo '<td>'.$row1['detail_id'].'</td>';
                                echo '<td>'.$row1['food_name'] .'</td>';
                                echo '<td>'.(int)$row1['quantity'].'</td>';
                                echo '<td>'.(int)$row1['price'].'VNĐ</td>';
                                $total_price = $total_price + $row1['price']*$row1['quantity'];
                                echo '<td>'.$row1['price']*$row1['quantity'].' VNĐ</td>';
                            echo '</tr>';   
                        }
                    }
                    echo '<tr>';
                        echo '<th colspan="4" class="text-end">Tổng</th>';
                        echo '<td>'. $total_price .' VNĐ</td>';
                    echo '</tr>';
                echo '</table>';
                echo '</div>';
            }
        }
    } else {
        echo 'No Bill ID provided.';
    }
    ?>
</body>

</html>