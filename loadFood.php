<?php
include 'config.php';
$sql = "SELECT * FROM food LIMIT 20";

$result = mysqli_query($conn, $sql);
$total = 0;
while ($row = mysqli_fetch_array($result)) {
    echo '<tr data-food-code=">' . $row['food_code'] . '">';
    echo '<td>' . $row['food_code'] . '</td>';
    echo '<td>' . $row['food_name'] . '</td>';
    echo '<td>' . $row['quantity'] . '</td>';
    echo '<td></td>';
    echo '<td></td>';
    // echo '<td>' . $row['quantity_sold'] . '</td>';
    // echo '<td>' . $row['quantity_remain'] . '</td>';
    echo '<td>' . $row['price'] . '</td>';
    $priceWithoutFirstChar = substr($row['price'], 1);
    // $totalPrice = ((float)$row['quantity_sold'] * (float)$priceWithoutFirstChar) || 0;
    $totalPrice = 0;
    echo '<td>' . number_format($totalPrice) . ' VND</td>';
    echo '</tr>';
    $total += $totalPrice;
}
echo '<tr>';
echo '<td colspan="6" align="right">Tổng cộng:</td>';
echo '<td>'.number_format($total).' VND</td>';
echo '</tr>';
?>