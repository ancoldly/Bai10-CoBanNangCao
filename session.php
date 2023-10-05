<?php
session_start();
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "Nguyen Hong An 22IT.B004";
    $_SESSION['age'] = "19 Age";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Tên bạn là: " . $_SESSION['name'] . "<br/>";
    echo "Số tuổi của bạn: " . $_SESSION['age'] . "<br/>";
    ?>
    <a href="test_session.php">Click here!</a>
</body>
</html>