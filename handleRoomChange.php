<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_row'])) {
    $foodCodeToDelete = $_POST['delete_row'];

    $sqlDelete = "DELETE FROM food WHERE food_code = '$foodCodeToDelete'";
    mysqli_query($conn, $sqlDelete);

    echo json_encode(['success' => true]);
    exit();
}
$sql = "SELECT * FROM room";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo '<tr data-room-code="' . $row['room_id'] . '">';
    echo '<td>' . $row['room_id'] . '</td>';
    echo '<td>' . $row['room_name'] . '</td>';
    echo '<td>' . number_format($row['room_price']) . ' VND</td>';
    echo '<td class="handle-process">';
    echo '<button class="button btn-edit">';
    echo '<i class="fa-solid fa-pen-to-square"></i>';
    echo '</button>';
    echo '</td>';
    echo '</tr>';
}
?>