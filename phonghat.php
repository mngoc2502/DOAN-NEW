<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phòng hát</title>
    <link rel="shortcut icon" href="./assets/img/micro-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/phonghat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
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
    <div class="container">
        <div class="tab-container">
            <div class="tab">
                <button class="tab-room active" onclick="activateTab(this, 1)">Phòng 1</button>
                <button class="tab-room" onclick="activateTab(this, 2)">Phòng 2</button>
                <button class="tab-room" onclick="activateTab(this, 3)">Phòng 3</button>
                <button class="tab-room" onclick="activateTab(this, 4)">Phòng 4</button>
            </div>
            <table class="table-room table-room-1">
                <tr>
                    <th>STT</th>
                    <th>Giờ thuê</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                include './config.php';

                $query = "SELECT * FROM bill WHERE room_id = 1";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $total = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="row" onclick="redirectToDetailsPage(\'' . $row["bill_id"] . '\')">';
                        echo '<td>' . $total . '</td>';
                        echo '<td>' . $row["total_hours"] . '</td>';
                        echo '<td>' . $row["start_time"] . '</td>';
                        echo '<td>' . $row["end_time"] . '</td>';
                        echo '<td>' . $row["total_cost"] . '</td>';
                        echo '</tr>';
                        $total++;
                    }
                }
                ?>
            </table>
            <table class="table-room table-room-2 d-none">
                <tr>
                    <th>STT</th>
                    <th>Giờ thuê</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                include './config.php';

                $query = "SELECT * FROM bill WHERE room_id = 2";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $total = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="row" onclick="redirectToDetailsPage(\'' . $row["bill_id"] . '\')">';
                        echo '<td>' . $total . '</td>';
                        echo '<td>' . $row["total_hours"] . '</td>';
                        echo '<td>' . $row["start_time"] . '</td>';
                        echo '<td>' . $row["end_time"] . '</td>';
                        echo '<td>' . $row["total_cost"] . '</td>';
                        echo '</tr>';
                        $total++;
                    }
                }
                ?>
            </table>
            <table class="table-room table-room-3 d-none">
                <tr>
                    <th>STT</th>
                    <th>Giờ thuê</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                include './config.php';

                $query = "SELECT * FROM bill WHERE room_id = 3";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $total = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="row" onclick="redirectToDetailsPage(\'' . $row["bill_id"] . '\')">';
                        echo '<td>' . $total . '</td>';
                        echo '<td>' . $row["total_hours"] . '</td>';
                        echo '<td>' . $row["start_time"] . '</td>';
                        echo '<td>' . $row["end_time"] . '</td>';
                        echo '<td>' . $row["total_cost"] . '</td>';
                        echo '</tr>';
                        $total++;
                    }
                }
                ?>
            </table>
            <table class="table-room table-room-4 d-none">
                <tr>
                    <th>STT</th>
                    <th>Giờ thuê</th>
                    <th>Thời gian bắt đầu</th>
                    <th>Thời gian kết thúc</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                include './config.php';

                $query = "SELECT * FROM bill WHERE room_id = 4";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $total = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="row" onclick="redirectToDetailsPage(\'' . $row["bill_id"] . '\')">';
                        echo '<td>' . $total . '</td>';
                        echo '<td>' . $row["total_hours"] . '</td>';
                        echo '<td>' . $row["start_time"] . '</td>';
                        echo '<td>' . $row["end_time"] . '</td>';
                        echo '<td>' . $row["total_cost"] . '</td>';
                        echo '</tr>';
                        $total++;
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <script src="./phonghat.js"></script>
    <script src="./redirectToDetailsPage.js"></script>
</body>

</html>