<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/thanhtoan.css">
    <link rel="stylesheet" href="./assets/css/tongquan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
  // Retrieve the value of 'inforoom' from the URL
  $inforoom = $_GET['inforoom'];
  $roomId = $_GET['roomId'];
  $totalHours = $_GET['totalHours'];
?>
    <?php
    session_start();

    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        echo "<script>alert('Bạn phải đăng nhập trước khi vào hệ thống!','Lỗi chưa đăng nhập!!!!');</script>";
        echo "<script>window.location = 'index.html';</script>";
        exit();
    }
    ?>
    <header>
        <div class="navbar">
            <ul class="nav-list">
                <li class="list-item">
                    <a href="./tongquan.php" class="list-item-link">Tổng quan</a>
                </li>
                <li class="list-item">
                    <a href="./nhanvien.php" class="list-item-link">Lịch làm</a>

                </li>
                <li class="list-item">
                    <a href="./phonghat.php" class="list-item-link">Quản lí phòng hát</a>
                </li>
                <li class="list-item">
                    <a href="./thongke.php" class="list-item-link">Thống kê</a>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="list-item">
                    <a href="./logout.php" class="list-item-link d-flex align-item-center">Đăng xuất
                        <i class="fa-solid fa-right-from-bracket p-2"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <h1 style="margin-top: 10px">Thanh Toán</h1>
    <div class="container-payment">
        <div class="table-box">
            <div class="header-box">
                <h2 style="margin-bottom: 25px">Sản phẩm đã dùng</h2>
            </div>
            <div>
            <table>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán(VND)</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                        include 'config.php';
                        $sql = "SELECT * FROM food LIMIT 10";
                        
                        $result = mysqli_query($conn, $sql);
                        $row_number = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr data-food-code=">' . $row['food_code'] . '">';
                            echo '<td>' . $row_number . '</td>';
                            $row_number++;
                            echo '<td>' . $row['food_name'] . '</td>';
                            echo '<td><input type="number" min = 0 style="padding: 5px" id="quantity">' . '</input></td>';
                            echo '<td id="price">' . $row['price'] . '</td>';
                            echo '<td id="total-price"> 0 </td>';
                            echo '</tr>';
                        }
                    ?>
                    <tr>
                        <td colspan="4" align="right">Tổng cộng:</td>
                        <td id="total">0</td>
                    </tr>
                </table>
                <div class="action-group">
                    <button class="button">
                        <span><i class="fa-solid fa-trash"></i></span>    
                        Xoá toàn bộ
                    </button>
                    <button class="button" onclick="updateTotalPrice()">
                        <span><i class="fa-solid fa-floppy-disk" ></i></span>
                        Cập nhật
                    </button>
                </div>
            </div>
        </div>
        <div class="bill-box">
            <div class="header-box">
                <h2>Thông tin thanh toán</h2>
            </div>
            <div class="body-box">
                <h3>Thông tin thanh toán phòng <?php echo $roomId?></h3>
                <table>
                    <tr>
                        <td>Tổng số giờ hát:</td>
                        <td align="right" id="time"><?php echo $inforoom?></td>
                    </tr>
                    <tr>
                        <td>Giá phòng/h:</td>
                        <td align="right">50000</td>
                    </tr>
                    <tr>
                        <td>Tổng tiền hát:</td>
                        <td align="right" id="price-time">
                            <?php echo $totalHours * 50000;?>                          
                        </td>
                    </tr>
                    <tr>
                        <td>Tổng tiền thức ăn:</td>
                        <td align="right" id="total"></td>
                    </tr>
                    <tr>
                        <td>Tổng tiền:</td>
                        <td align="right" id="total-bill"></td>
                    </tr>
                </table>
                <div class="action-group">
                    <button class="button">
                        <span ><i class="fa-solid fa-print"></i></span>
                        Xuất file
                    </button>
                    <button class="button">
                        <span><i class="fa-solid fa-credit-card"></i></span>
                        Thanh toán
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="./payment.js"></script>
</body>
</html>