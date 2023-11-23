const room = document.querySelector(".body-room-left");
const intervalIds = [
    {
        id:1,
        intervalId: ""
    },
    {
        id:2,
        intervalId: ""
    },
    {
        id:3,
        intervalId: ""
    },
    {
        id:4,
        intervalId: ""
    }
];
const roomInfo = [
    {
        id: 1,
        price: "50.000đ",
        time: "00:00:00",
    },
    {
        id: 2,
        price: "50.000đ",
        time: "00:00:00",
    },
    {
        id: 3,
        price: "50.000đ",
        time: "00:00:00",
    },
    {
        id: 4,
        price: "50.000đ",
        time: "00:00:00",
    },
];

room.innerHTML = roomInfo
    .map((info) => {
        return `
        <div class="room-card card-disabled">
            <div class="price">
                <img src="./assets/img/micro.png" alt="" width="100px" />
                <p class="text-bold text-price">Giá: ${info.price}</p>
                <p class="text-bold timer">
                    <span id="time-${info.id}">${info.time}</span>
                </p>
            </div>
            <div class="room-state">
                <h3 class="customer-false">
                    Chưa có khách
                </h3>
                <h3 class="customer-true">
                    Đang có có khách
                </h3>
                <button class="button btn-purchase" onclick="handle_payment(this)" roomId = "${info.id}">
                    Thanh toán
                </button>
                <button class="button btn-start" onclick="handle_start(this)" roomId = "${info.id}">
                    Bắt đầu
                </button>
            </div>
            <div class="room-cancel">
                <butto" class="button button-secondary btn-cancel">
                    Hủy phòng
                </button>
            </div>
        </div>
    `;
    })
    .join("");

function handle_start(clickedButton) {
    var roomId = clickedButton.getAttribute("roomId");
    var roomCard = clickedButton.closest(".room-card");
    roomCard.classList.add("card-active");
    roomCard.classList.remove("card-disabled");

    let seconds = 0;
    let minutes = 0;
    let hours = 0;
    const intervalId = setInterval(() => {
        seconds++;
        if (seconds === 60) {
            seconds = 0;
            minutes++;
            if (minutes === 60) {
                minutes = 0;
                hours++;
            }
        }
        const formattedTime =
            String(hours).padStart(2, "0") +
            ":" +
            String(minutes).padStart(2, "0") +
            ":" +
            String(seconds).padStart(2, "0");
        roomInfo[roomId - 1].time = formattedTime;
        document.getElementById(`time-${roomId}`).innerText = formattedTime;
    }, 1000);
    
    intervalIds[roomId - 1].intervalId = intervalId;
}

function handle_payment(clickedButton) {
    var roomCard = clickedButton.closest(".room-card");
    var roomId = clickedButton.getAttribute("roomId");
    roomCard.classList.remove("card-active");
    roomCard.classList.add("card-disabled");

    alert(roomInfo[roomId-1].time);
    clearInterval(intervalIds[roomId-1].intervalId)
    document.getElementById(`time-${roomId}`).innerText = "00:00:00";
}

// function handle_cancle(clickedButton){
//     confirm("Bạn có muốn hủy phòng không ?", "THÔNG BÁO")
// }