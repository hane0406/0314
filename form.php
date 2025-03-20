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
    <title>報名表單</title>
</head>
<body>
    <h1>歡迎 <?php echo $_SESSION["userName"]; ?>，請填寫報名表單</h1>
    <form action="submit.php" method="post">
        <label for="event">選擇活動：</label>
        <select id="event" name="event" required>
            <option value="A">場次 A</option>
            <option value="B">場次 B</option>
            <option value="C">場次 C</option>
        </select><br><br>

        <label for="name">姓名：</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email：</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="提交報名">
    </form>
    <br>
    <a href="logout.php">登出</a>
</body>
</html>
