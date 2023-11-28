<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nhân viên</title>
        <link rel="stylesheet" href="./assets/css/base.css" />
        <link rel="stylesheet" href="./assets/css/nhanvien.css" />
        <link
            rel="shortcut icon"
            href="./assets/img/micro-favicon.png"
            type="image/x-icon"
        />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
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
                        <a href="./tongquan.php" class="list-item-link"
                            >Tổng quan</a
                        >
                    </li>
                    <li class="list-item">
                        <a href="./nhanvien.php" class="list-item-link"
                            >Lịch làm</a
                        >
                    </li>
                    <li class="list-item">
                        <a href="./phonghat.php" class="list-item-link"
                            >Quản lí phòng hát</a
                        >
                    </li>
                    <li class="list-item">
                        <a href="./thongke.php" class="list-item-link"
                            >Thống kê</a
                        >
                    </li>
                </ul>
                <ul class="nav-list">
                    <li class="list-item">
                        <a
                            href="./logout.php"
                            class="list-item-link d-flex align-item-center"
                            >Đăng xuất
                            <i class="fa-solid fa-right-from-bracket p-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="container">
            <h1>Lịch làm việc</h1>
            <iframe src="https://script.google.com/macros/s/AKfycbyenqQ3ioBjcWnzk8aY8ESYXLM_n8LQrftSi94KA1z6AVSKgbDH-H40BPRNXlMyo1JSbQ/exec" width = "100%" height="500px" frameBorder="0"></iframe>
        </div>
    </body>
    <script src="./nhanvien.js"></script>
    <script src="./loadContent_nhanvien.js"></script>
</html>
