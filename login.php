<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["userName"])) {
        echo "Welcome back, " . $_COOKIE["userName"] . "<br>";
    }
    ?>

    <h1>請登入以使用系統</h1>
    <form action="logincheck.php" method="post">
        請輸入你的使用者名稱: 
        <input type="text" name="userName" value="<?php echo isset($_COOKIE['userName']) ? $_COOKIE['userName'] : ''; ?>"><br>
        請輸入你的密碼: 
        <input type="password" name="userPwd"><br>
        <input type="submit" value="登入">
    </form>
</body>
</html>
