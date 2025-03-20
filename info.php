<?php
session_start();
if (!isset($_SESSION["role"])) {
    echo "非法訪問，將在 2 秒後跳轉到登入頁...";
    header("Refresh:2;url=login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>使用者資訊</title>
</head>
<body>
    <h1>歡迎，<?php echo $_SESSION["userName"]; ?>！</h1>
    <p>當前時間：<?php echo date("Y-m-d H:i:s"); ?></p>
    <a href="logout.php">登出</a>
</body>
</html>
