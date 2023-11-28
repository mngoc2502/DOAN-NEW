<?php
include 'config.php';
$sql = "SELECT * FROM food LIMIT 20";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo '<tr data-food-code=">' . $row['food_code'] . '">';
    echo '<td' . $row['food_code'] . '</td>';
    echo '<td' . $row['food_name'] . '</td>';
    echo '<td' . $row['quantity'] . '</td>';
    echo '<td' . $row['quantity_sold'] . '</td>';
    echo '<td' . $row['quantity_remain'] . '</td>';
    echo '<td' . $row['price'] . '</td>';
    $priceWithoutFirstChar = substr($row['price'], 1);
    echo '<td>' . ((float)$row['quantity_sold'] * (float)$priceWithoutFirstChar) . '</td>';
    echo '</tr>';
}
?>