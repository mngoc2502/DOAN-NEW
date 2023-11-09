function handle_start(clickedButton) {
    // Lấy phần tử cha của nút được click (div.room-card)
    var roomCard = clickedButton.closest('.room-card');

    // Thêm class "card_active" vào phần tử
    roomCard.classList.add('card-active');
    roomCard.classList.remove('card-disabled');
}
function handle_cancle(clickedButton) {
    var roomCard = clickedButton.closest('.room-card');
    roomCard.classList.remove('card-active');
    roomCard.classList.add('card-disabled');
}