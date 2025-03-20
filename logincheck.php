<?php
session_start();
date_default_timezone_set("Asia/Taipei");

$adminName = "admin";
$adminPwd = "admin123";
$userName = "user";
$userPwd = "user123";

// 取得使用者輸入的帳號密碼
$inputName = $_POST["userName"];
$inputPwd = $_POST["userPwd"];

// 判斷使用者類型
if ($inputName == $adminName && $inputPwd == $adminPwd) {
    $_SESSION["role"] = "admin";
    $_SESSION["userName"] = $inputName;

    // 設置 Cookie，保存使用者名稱 7 天
    setcookie("userName", $inputName, time() + 7 * 24 * 60 * 60);

    header("Location: admin.php");
    exit();
} elseif ($inputName == $userName && $inputPwd == $userPwd) {
    $_SESSION["role"] = "user";
    $_SESSION["userName"] = $inputName;

    setcookie("userName", $inputName, time() + 7 * 24 * 60 * 60);

    header("Location: user.php");
    exit();
} else {
    echo "登入失敗，3 秒後返回登入頁面...";
    header("Refresh:3;url=login.php");
    exit();
}
?>
