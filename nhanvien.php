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
                            >Nhân viên</a
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
            <div class="tab-container">
                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'thu2')">Thứ 2</button>
                    <button class="tablinks" onclick="openTab(event, 'thu3')">Thứ 3</button>
                    <button class="tablinks" onclick="openTab(event, 'thu4')">Thứ 4</button>
                    <button class="tablinks" onclick="openTab(event, 'thu5')">Thứ 5</button>
                    <button class="tablinks" onclick="openTab(event, 'thu6')">Thứ 6</button>
                    <button class="tablinks" onclick="openTab(event, 'thu7')">Thứ 7</button>
                    <button class="tablinks" onclick="openTab(event, 'chuNhat')">Chủ nhật</button>
                </div>
                
                <div id="thu2" class="tabcontent">
                    <table>
                        <tr>
                            <th>Ca làm</th>  
                            <th>Nhân viên 1</th>   
                            <th>Nhân viên 2</th>
                            <th>Nhân viên 3</th>
                            <th>Nhân viên 4</th>                   
                        </tr>
                        <tr>
                            <td>Ca 1</td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ca 2</td>
                            <td></td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Ca 3</td>
                            <td></td>
                            <td>X</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                           
                        </tr>
                    </table>
                </div>
        
                <div id="nhanVien" class="tabcontent">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên nhân viên</th>
                            <th>Số giờ làm</th>
                            <th>Lương/giờ</th>
                            <th>Số ngày nghỉ</th>
                            <th>Thưởng</th>
                            <th>Lương nhận</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tên sản phẩm</td>
                            <td>Tổng số lượng</td>
                            <td>250</td>
                            <td>2</td>
                            <td>100.000</td>
                            <td>250</td>
                        </tr>
                    </table>
                </div>
        
                <div id="thucAn" class="tabcontent">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Tổng số lượng</th>
                            <th>Tổng đã bán</th>
                            <th>Tổng còn lại</th>
                            <th>Giá bán</th>
                            <th>Tổng tiền</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Tên sản phẩm</td>
                            <td>Tổng số lượng</td>
                            <td>250</td>
                            <td>250</td>
                            <td>250</td>
                            <td>250</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <iframe src="https://script.google.com/macros/s/AKfycbyenqQ3ioBjcWnzk8aY8ESYXLM_n8LQrftSi94KA1z6AVSKgbDH-H40BPRNXlMyo1JSbQ/exec" width = "100%" height="500px" frameBorder="0"></iframe>
    </body>
    <script src="./nhanvien.js"></script>
    <script src="./loadContent_nhanvien.js"></script>
</html>
