<?php
session_start();
unset($_SESSION['name']);
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
    if(empty($_SESSION['name'])) {
        echo "Bạn đã hủy session của mình!";
    }
    ?>
    <a href="/session.php">Quay lại session của mình!</a>
</body>
</html>