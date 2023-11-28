const btnEdit = document.querySelectorAll(".btn-edit");

btnEdit.forEach((btn) => {
    btn.onclick = (e) => {
        var row = e.target.closest("tr");
        var dataCells = row.querySelectorAll("td");

        // Duyệt qua từng thẻ td để đổi sang thẻ input
        for (let i = 1; i < dataCells.length - 1; i++) {
            var inputData =
                '<input type="text" value="' + dataCells[i].textContent + '">';
            dataCells[i].innerHTML = inputData;
        }

        var btnSave = row.querySelector(".btn-save");
        var btnDelete = row.querySelector(".btn-del");
        var btnEdit = row.querySelector(".btn-edit");

        // Ẩn/hiện các button
        btnSave.classList.remove("d-none");
        btnEdit.classList.add("d-none");
        btnDelete.classList.add("d-none");

        //Sự kiện khi bấm vào nút Save
        btnSave.onclick = () => {
            var updatedData = {};

            //Lấy ID và gán vào mảng dữ liệu
            updatedData["id"] = dataCells[0].textContent;

            //Lấy dữ liệu từ input và gán vào mảng dữ liệu
            for (let i = 1; i < dataCells.length - 1; i++) {
                var inputValue = dataCells[i].querySelector("input").value;
                dataCells[i].innerHTML = inputValue;
                updatedData["column" + i] = inputValue;
            }
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "handleUpdate.php", true);
            xhr.setRequestHeader(
                "Content-type",
                "application/x-www-form-urlencoded"
            );

            // Chuyển dữ liệu từ mảng sang string
            var params = Object.keys(updatedData)
                .map((key) => key + "=" + encodeURIComponent(updatedData[key]))
                .join("&");
            console.log(params);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                    // Optionally, you can handle the server response here
                }
            };

            xhr.send(params);
            btnSave.classList.add("d-none");
            btnEdit.classList.remove("d-none");
            btnDelete.classList.remove("d-none");
        };
    };
});
