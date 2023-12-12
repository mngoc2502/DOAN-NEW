function activateTab(clickedButton, roomId) {
    const buttons = document.querySelectorAll('.tab-room');
    const tableRooms = document.querySelectorAll('.table-room');
    const tabContainer = document.querySelector('.tab-container');

    tableRooms.forEach(tableRoom =>{
        tableRoom.classList.add('d-none');
    })

    buttons.forEach(button => {
        button.classList.remove('active');
    });

    clickedButton.classList.add('active');
    
    const room = document.querySelector('.table-room-' + roomId);
    room.classList.remove('d-none');
}
