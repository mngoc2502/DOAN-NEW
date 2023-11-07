function openTab(evt, tabName) {
    // Lấy tất cả các tab content và ẩn chúng
    var tabcontent = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Lấy tất cả các tab links và xóa lớp active
    var tablinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Hiển thị tab content được chọn và thêm lớp active vào tab link
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Mở tab mặc định khi trang được tải
document.getElementById("thu2").style.display = "block";
document.querySelector(".tablinks:nth-child(1)").classList.add("active");


