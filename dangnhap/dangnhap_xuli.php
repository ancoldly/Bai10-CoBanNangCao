<?php
session_start();

if (isset($_POST['login'])) {
    include('../dangnhap/connect.php');
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sl = "SELECT * FROM users WHERE Username = '".$name."' AND Password = '".$pass."'";
    $result = mysqli_query($connect, $sl);
    $row = mysqli_fetch_assoc($result);
    $kt = mysqli_num_rows($result);

    if ($kt > 0) {
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $pass;

        if (isset($_POST['remember']) && ($_POST['remember'] == "on")) {
            setcookie("username", $name, time() + 60);
            setcookie("password", $pass, time() + 60);
        }

        echo "<script>alert('Login Successful.'); location.href='trangquantriadmin.php';</script>";
        echo "Chào bạn: ".$row['name']."<br>Pass của bạn là: ".$row['pass'];
    } else {
        echo "<script>alert('Login Failed.'); location.href='index.php';</script>";
    }
}

if (isset($_POST['cancel'])) {
    echo "<script>location.href='index.php';</script>";
}
?>