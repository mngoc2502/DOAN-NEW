<?php
include 'config.php';
$sql = "SELECT * FROM staff";

$result = mysqli_query($conn, $sql);
$total = 0;
while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row['staff_id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['working_time'] . '</td>';
    echo '<td>' . number_format($row['salary_hour']) . ' VND</td>';
    echo '<td>' . $row['off_day'] . '</td>';
    $totalSalary = $row['working_time'] * $row['salary_hour'];
    echo '<td>' . number_format($totalSalary) . ' VND</td>';
    echo '</tr>';
    $total += $totalSalary;
}
echo '<tr>';
echo '<td colspan="5" align="right">Tổng cộng</td>';
echo '<td>'.number_format($total).' VND</td>';
echo '</tr>';
?>