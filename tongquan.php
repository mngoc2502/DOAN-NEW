<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tổng Quan</title>
    <link rel="stylesheet" href="./assets/css/tongquan.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="shortcut icon" href="./assets/img/micro-favicon.png" type="image/x-icon" />
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
                    <a href="./nhanvien.php" class="list-item-link">Nhân viên</a>

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
    <h1 class="title-page">KARAOKE NIGHT</h1>
    <div class="container">
        <div class="content">
            <div class="room">
                <div class="room-left">
                    <div class="head-room-left">
                        <h3 class="text-header">phòng hát</h3>
                    </div>
                    <div class="body-room-left"></div>
                </div>
                <div class="room-right">
                    <div class="head-room-right">
                        <h3 class="text-header">Danh sách phòng</h3>
                    </div>
                    <div class="body-room-right">
                        <table id="table-food">
                            <tr>
                                <th>STT</th>
                                <th>Tên phòng</th>
                                <th>Giá tiền</th>
                                <th>Thao tác</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Phòng 1</td>
                                <td>250</td>
                                <td class="handle-process text-center">
                                    <button class="button btn-edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="button btn-del">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Phòng 1</td>
                                <td>250</td>
                                <td class="handle-process text-center">
                                    <button class="button btn-edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="button btn-del">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Phòng 1</td>
                                <td>250</td>
                                <td class="handle-process text-center">
                                    <button class="button btn-edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="button btn-del">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="food">
                <div class="table-food">
                    <div class="room-right">
                        <div class="head-room-right">
                            <h3 class="text-header">Danh sách món ăn</h3>
                            <div class="btn-controller">
                                <button name="btn-cancel_add" class="button btn-cancel_add d-none">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                                <button name="btn-save" class="button btn-save d-none">
                                    <i class="fa-regular fa-floppy-disk"></i>
                                </button>
                                <button name="btn-add" class="button btn-add">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="body-room-right food-table">
                            <table>
                                <tr class="table-heading">
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Tổng số lượng</th>
                                    <th>Tổng đã bán</th>
                                    <th>Tổng còn lại</th>
                                    <th>Giá bán</th>
                                    <th>Hành động</th>
                                </tr>
                                <tr class="data-field d-none">
                                    <td>
                                        <input type="text" class="input" name="stt">
                                    </td>
                                    <td>
                                        <input type="text" class="input" name="tensp">
                                    </td>
                                    <td>
                                        <input type="text" class="input" name="sl">
                                    </td>
                                    <td>
                                        <input type="text" class="input" name="daban">
                                    </td>
                                    <td>
                                        <input type="text" class="input" name="conlai">
                                    </td>
                                    <td>
                                        <input type="text" class="input" name="giaban">
                                    </td>
                                </tr>
                                <?php
                                include 'config.php';
                                include './handleDeleteRow.php';
                                include './handleAddRow.php';
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./deleteRow.js"></script>
    <script src="./active.js"></script>
    <script src="./addItem.js"></script>
</body>

</html>