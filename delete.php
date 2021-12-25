<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除</title>
</head>
<body>
    <?php
    // 开启session，方便做数据缓存
    session_start();
    // 数据库链接初始化
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'mall');
    if (!$link) {
        exit('数据库连接失败！');
    }
    // 获取缓存下来的ID
    $delete = $_SESSION['delete'];
    mysqli_query($link, "delete from product where id = $delete");
    // 将缓存值移除
    unset($_SESSION['delete']);
    header('location:mall.php');
    ?>
</body>
</html>