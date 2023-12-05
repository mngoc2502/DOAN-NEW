<?php
include 'config.php';
$sql = "SELECT * FROM room";

$result = mysqli_query($conn, $sql);
$total = 0;
while ($row = mysqli_fetch_array($result)) {
    echo '<tr data-room-code="' . $row['room_id'] . '">';
    echo '<td>' . $row['room_id'] . '</td>';
    echo '<td>' . $row['room_name'] . '</td>';
    
    echo '<td>' . number_format($row['room_price']) . ' VND</td>';
    
    echo '<td>' . $row['rental_hours'] . '</td>';
    
    $totalPrice = $row['room_price'] * $row['rental_hours'];
    echo '<td>' . number_format($totalPrice) . ' VND</td>';
    $total = $total + $totalPrice; 
    echo '</tr>';
}
echo '<tr>';
echo '<td colspan="4" align="right">Tổng cộng:</td>';
echo '<td>'.number_format($total).' VND</td>';
echo '</tr>';
?>