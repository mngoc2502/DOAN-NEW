<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_row'])) {
    $foodCodeToDelete = $_POST['delete_row'];

    // Perform the deletion from the database
    $sqlDelete = "DELETE FROM food WHERE food_code = '$foodCodeToDelete'";
    mysqli_query($conn, $sqlDelete);

    // Respond with a success message or handle errors as needed
    echo json_encode(['success' => true]);
    exit();
}
$sql = "SELECT * FROM food LIMIT 20";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo '<tr data-food-code="' . $row['food_code'] . '">';
    echo '<td>' . $row['food_code'] . '</td>';
    echo '<td>' . $row['food_name'] . '</td>';
    echo '<td>' . $row['quantity'] . '</td>';
    echo '<td></td>';
    echo '<td></td>';
    // echo '<td>' . $row['quantity_sold'] . '</td>';
    // echo '<td>' . $row['quantity_remain'] . '</td>';
    echo '<td>' . $row['price']. '</td>';
    echo '<td class="handle-process">';
    echo '<button class="button btn-edit">';
    echo '<i class="fa-solid fa-pen-to-square"></i>';
    echo '</button>';
    echo '<button class="button btn-save d-none">';
    echo '<i class="fa-regular fa-floppy-disk"></i>';
    echo '</button>';
    echo '<button class="button btn-del disable" onclick="deleteRow(\'' . $row['food_code'] . '\')">';
    echo '<i class="fa-solid fa-trash"></i>';
    echo '</button>';
    echo '</td>';
    echo '</tr>';
}
?>