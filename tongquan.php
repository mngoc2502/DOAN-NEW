<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tổng Quan</title>
        <link rel="stylesheet" href="./assets/css/tongquan.css" />
        <link rel="stylesheet" href="./assets/css/base.css" />
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
        <h1 class="title-page">KARAOKE NIGHT</h1>
        <div class="container">
            <div class="content">
                <div class="room">
                    <div class="room-left">
                        <div class="head-room-left">
                            <h5 class="text-header">phòng hát</h5>
                        </div>
                        <div class="body-room-left">
                            <div class="room-card card-disabled">
                                <div class="price">
                                    <img
                                        src="./assets/img/micro.png"
                                        alt=""
                                        width="100px"
                                    />
                                    <p class="text-bold">Giá: 50.000đ/h</p>
                                </div>
                                <div class="room-state">
                                    <h3 class="customer-false">
                                        Chưa có khách
                                    </h3>
                                    <h3 class="customer-true">
                                        Đang có có khách
                                    </h3>
                                    <button class="button btn-purchase">
                                        Thanh toán
                                    </button>
                                    <button
                                        onclick="handle_start(this)"
                                        class="button btn-start">
                                        Bắt đầu
                                    </button>
                                </div>
                                <div class="room-cancel">
                                    <button
                                        onclick="handle_cancle(this)"
                                        class="button button-secondary btn-cancel"
                                    >
                                        Hủy phòng
                                    </button>
                                </div>
                            </div>
                            <div class="room-card card-disabled">
                                <div class="price">
                                    <img
                                        src="./assets/img/micro.png"
                                        alt=""
                                        width="100px"
                                    />
                                    <p class="text-bold">Giá: 50.000đ/h</p>
                                </div>
                                <div class="room-state">
                                    <h3 class="customer-false">
                                        Chưa có khách
                                    </h3>
                                    <h3 class="customer-true">
                                        Đang có có khách
                                    </h3>
                                    <button class="button btn-purchase">
                                        Thanh toán
                                    </button>
                                    <button 
                                        onclick="handle_start(this)"
                                        class="button btn-start">
                                        Bắt đầu
                                    </button>
                                </div>
                                <div class="room-cancel">
                                    <button
                                        onclick="handle_cancle(this)"
                                        class="button button-secondary btn-cancel"
                                    >
                                        Hủy phòng
                                    </button>
                                </div>
                            </div>

                            <div class="room-card card-disabled">
                                <div class="price">
                                    <img
                                        src="./assets/img/micro.png"
                                        alt=""
                                        width="100px"
                                    />
                                    <p class="text-bold">Giá: 50.000đ/h</p>
                                </div>
                                <div class="room-state">
                                    <h3 class="customer-false">
                                        Chưa có khách
                                    </h3>
                                    <h3 class="customer-true">
                                        Đang có có khách
                                    </h3>
                                    <button class="button btn-purchase">
                                        Thanh toán
                                    </button>
                                    <button class="button btn-start" onclick="handle_start(this)">
                                        Bắt đầu
                                    </button>
                                </div>
                                <div class="room-cancel">
                                    <button
                                        class="button button-secondary btn-cancel" onclick="handle_cancle(this)"
                                    >
                                        Hủy phòng
                                    </button>
                                </div>
                            </div>

                            <div class="room-card card-disabled">
                                <div class="price">
                                    <img
                                        src="./assets/img/micro.png"
                                        alt=""
                                        width="100px"
                                    />
                                    <p class="text-bold">Giá: 50.000đ/h</p>
                                </div>
                                <div class="room-state">
                                    <h3 class="customer-false">
                                        Chưa có khách
                                    </h3>
                                    <h3 class="customer-true">
                                        Đang có có khách
                                    </h3>
                                    <button class="button btn-purchase">
                                        Thanh toán
                                    </button>
                                    <button class="button btn-start" onclick="handle_start(this)">
                                        Bắt đầu
                                    </button>
                                </div>
                                <div class="room-cancel">
                                    <button
                                        class="button button-secondary btn-cancel" onclick="handle_cancle(this)"
                                    >
                                        Hủy phòng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-right">
                        <div class="head-room-right">
                            <h5 class="text-header">Danh sách phòng</h5>
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
                                            <i
                                                class="fa-solid fa-pen-to-square"
                                            ></i>
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
                                            <i
                                                class="fa-solid fa-pen-to-square"
                                            ></i>
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
                                            <i
                                                class="fa-solid fa-pen-to-square"
                                            ></i>
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
                                <h5 class="text-header">Danh sách món ăn</h5>
                            </div>
                            <div class="body-room-right">
                                <table>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Tổng số lượng</th>
                                        <th>Tổng đã bán</th>
                                        <th>Tổng còn lại</th>
                                        <th>Giá bán</th>
                                        <th>Hành động</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Tên sản phẩm</td>
                                        <td>Tổng số lượng</td>
                                        <td>250</td>
                                        <td>250</td>
                                        <td>250</td>

                                        <td class="handle-process">
                                            <button class="button btn-edit">
                                                <i
                                                    class="fa-solid fa-pen-to-square"
                                                ></i>
                                            </button>
                                            <button class="button btn-del">
                                                <i
                                                    class="fa-solid fa-trash"
                                                ></i>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./active.js">

        </script>
    </body>
</html>
