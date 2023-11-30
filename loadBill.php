<?php
include './config.php';
if (!$conn) {
    echo 'LOST CONNECTION ' . $php_errormsg . '';
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roomId = $_POST['roomId'];
        $query = "SELECT * FROM bill WHERE bill_id = $roomId";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<td>'.$row["bill_id"].'</td>';
                echo '<td>'.$row["total_hours"].'</td>';
                echo '<td>'.$row["start_time"].'</td>';
                echo '<td>'.$row["end_time"].'</td>';
                echo '<td>'.$row["total_cost"].'</td>';
            }
        }
        mysqli_close($conn);
    }
}
?>