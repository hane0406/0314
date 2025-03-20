<?php
session_start();
if (!isset($_SESSION["role"])) {
    echo "非法訪問，將在 2 秒後跳轉到登入頁...";
    header("Refresh:2;url=login.php");
    exit();
}

// 獲取表單資料
$event = $_POST["event"];
$name = $_POST["name"];
$email = $_POST["email"];

// 存入檔案（模擬資料庫）
$file = fopen("registrations.txt", "a");
fwrite($file, "活動: $event | 姓名: $name | Email: $email\n");
fclose($file);

echo "報名成功！3 秒後回到表單頁面...";
header("Refresh:3;url=form.php");
exit();
