const bntController = document.querySelector(".btn-controller");
const btnAdd = document.querySelector(".btn-add");
const btnCancelAdd = document.querySelector(".btn-cancel_add");
const btnSave = document.querySelector(".btn-save");
const dataField = document.querySelector(".data-field");



btnAdd.onclick = () => {
    dataField.classList.remove("d-none");
    btnAdd.classList.add("d-none");
    btnSave.classList.remove("d-none");
    btnCancelAdd.classList.remove("d-none");
};

btnSave.onclick = () => {
    addRow();
    dataField.classList.add("d-none");
    btnAdd.classList.remove("d-none");
    btnSave.classList.add("d-none");
    btnCancelAdd.classList.add("d-none");
    location.reload();
};

btnCancelAdd.onclick = () => {
    var inputValue = dataField.querySelectorAll('input');
    inputValue.forEach(value => {
        value.value ="";
    });
    dataField.classList.add("d-none");
    btnAdd.classList.remove("d-none");
    btnSave.classList.add("d-none");
    btnCancelAdd.classList.add("d-none");
};

function addRow() {
    var inputValue = dataField.querySelectorAll('input');
    var arrValue = [];
    
    inputValue.forEach(value => {
        arrValue.push(value.value);
    });

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "tongquan.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };

    var data = "arrValue=" + JSON.stringify(arrValue);

    xhr.send(data);
}