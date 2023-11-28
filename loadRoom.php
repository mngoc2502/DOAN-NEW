<?php
include 'config.php';
$sql = "SELECT * FROM room";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo '<tr data-room-code="' . $row['room_id'] . '">';
    echo '<td>' . $row['room_id'] . '</td>';
    echo '<td>' . $row['room_name'] . '</td>';
    
    // Format room_price as VND
    echo '<td>' . number_format($row['room_price']) . ' VND</td>';
    
    echo '<td>' . $row['rental_hours'] . '</td>';
    
    // Format the result of multiplication as VND
    $totalPrice = $row['room_price'] * $row['rental_hours'];
    echo '<td>' . number_format($totalPrice) . ' VND</td>';
    
    echo '</tr>';
}
?>