<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加</title>
</head>
<body>
<h1 align="center">添加</h1>
<div align="center">
    <form action="" method="post" name="create_form">
        <p>商品名称: <input type="text" name="name"></p>
        <p>商品图片: <input type="text" name="pic"></p>
        <p>商品价格: <input type="text" name="price"></p>
        <p>商品状态:
            <select name="status">
                <option value ="1">新增</option>
                <option value ="2">上架</option>
                <option value="3">已修改</option>
            </select>
        </p>
        <p><input type="submit" name="create" value="提交"></p>
    </form>
    <?php
    session_start();
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'mall');
    if (!$link) {
        exit('数据库连接失败！');
    }
    if (!empty($_POST['create'])) {
        $name = $_POST['name'];
        $pic = $_POST['pic'];
        $price = $_POST['price'];
        $status = $_POST['status'];
        mysqli_query($link, "insert product (name, pic, price, status) values ('$name', '$pic', '$price', '$status')");
        $_SESSION['create'] = '添加成功！';
        header('location:mall.php');
    }
    ?>
</div>
</body>
</html>