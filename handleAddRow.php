<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["arrValue"])) {
    $arrValue = json_decode($_POST["arrValue"]);
    $sql = "INSERT INTO food(food_code, food_name, quantity, quantity_sold, quantity_remain, price) VALUES ('$arrValue[0]', '$arrValue[1]', '$arrValue[2]', '$arrValue[3]','$arrValue[4]','$arrValue[5]')";
    
    include("./config.php");
    if ($conn->query($sql) === TRUE) {
        echo "Thanh cong !";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>
