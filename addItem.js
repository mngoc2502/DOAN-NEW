const bntController = document.querySelector('.btn-controller');
const btnAdd = document.querySelector(".btn-add");
const btnCancelAdd = document.querySelector(".btn-cancel_add");
const btnSave = document.querySelector(".btn-save");
const btnUpload = document.querySelector(".btn-upload");
const bodyRoom = document.querySelector(".food-table");
const table = bodyRoom.querySelector("table tbody");
const tableHeading = bodyRoom.querySelector(".table-heading");

btnAdd.onclick = () => {
    var newRow = `
    <tr>
        <td>
            <input type="text" name="" class="input">
        </td>
        <td>
            <input type="text" name="" class="input">
        </td>
        <td>
            <input type="text" name="" class="input">
        </td>
        <td>
            <input type="text" name="" class="input">
        </td>
        <td>
            <input type="text" name="" class="input">
        </td>
        <td>
            <input type="text" name="" class="input">
        </td>

        <td class="handle-process">
            <button class="button btn-edit">
                <i class="fa-solid fa-pen-to-square"></i>
            </button>
            <button class="button btn-del disable">
                <i class="fa-solid fa-trash"></i>
            </button>
        </td>
    </tr>
    `;

    tableHeading.insertAdjacentHTML("afterend", newRow);

    btnAdd.classList.add("d-none");
    btnSave.classList.remove("d-none");
    btnCancelAdd.classList.remove("d-none");
};

btnCancelAdd.onclick = () => {
    var secondChild = table.children[1];
    if (secondChild) {
        table.removeChild(secondChild);
    }

    btnAdd.classList.remove("d-none");
    btnSave.classList.add("d-none");
    btnCancelAdd.classList.add("d-none");
};

btnSave.onclick = () => {
    btnAdd.classList.remove("d-none");
    btnSave.classList.add("d-none");
    btnCancelAdd.classList.add("d-none");
};
btnUpload.onclick = () => {
    var fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.multiple = false;
    fileInput.directory = true;

    fileInput.addEventListener("change", function (event) {
        var folderPath = event.target.files[0].path;

        alert("Đã chọn thư mục:", folderPath);
        document.body.removeChild(fileInput);
    });
};
