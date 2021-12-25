<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    img {
        height: 50px;
        width: 50px;
    }

</style>
<body>
<h1 align="center">简单B/S架构Web应用</h1>
<div align="center">
    <form action="" method="post">
        <p><input type="button" value="添加" name="create" onclick="location.href='create.php'"></p>
        <p><input type="text" name="content_sear"><input type="submit" value="搜索" name="search"></p>
        <table class="table" border="1" cellspacing="0" width="800px">
            <tr style="height: 50px">
                <th>商品ID</th>
                <th>商品名称</th>
                <th>商品图片</th>
                <th>商品价格</th>
                <th>商品状态</th>
                <th>操作</th>
            </tr>

            <?php ob_start();
            // 开启session，方便做数据缓存
            session_start();
            // 数据库链接初始化
            $link = mysqli_connect('127.0.0.1', 'root', 'root', 'mall');
            if (!$link) {
                exit('数据库连接失败！');
            }
            // 判断是否点击搜索按钮，如果没有点击则查询全部数据，如果点击则按照name属性查数据库
            if (empty($_POST['search'])) {
                $res = mysqli_query($link, "select * from product order by id desc");
            } else {
                $content_sear = $_POST['content_sear'];
                $res = mysqli_query($link, "select * from product where name like '%$content_sear%' order by id desc");
            }
            // 循环遍历输出数据
            while ($row = mysqli_fetch_array($res)) {
                // 判断是否点击确认修改按钮
                if (!empty($_POST["updates$row[0]"])) {
                    $name = $_POST['name'];
                    $pic = $_POST['pic'];
                    $price = $_POST['price'];
                    $status = $_POST['status'];
                    mysqli_query($link, "update product set name='$name',pic='$pic',price='$price',status='$status' where id=$row[0]");
                    header('location:#');
//                    location.href="delete.php";
                }
                // 判断是否点击删除按钮
                if (!empty($_POST["delete$row[0]"])) {
                    // 将ID缓存起来，方便delete.php做删除
                    $_SESSION['delete'] = $row[0];
                    echo '<script>
                            if (confirm("是否删除？")==true){
                                location.href="delete.php";
                            }
                        </script>';
                }
                echo '<tr align="center">';
                echo "<td>$row[0]</td><td>$row[1]</td><td><img src='$row[2]' alt=''></td><td>$row[3]</td><td><span id='option$row[0]'/></td>
                        <td>
                        <input type='submit' id='update$row[0]' name='update$row[0]' value='修改'>
                        <input type='submit' id='delete$row[0]' name='delete$row[0]' value='删除'>
                        </td>";
                echo "<script>
                        if ($row[4]=='1'){
                            document.getElementById('option$row[0]').innerText='新增'
                        };
                        if ($row[4]=='2'){
                            document.getElementById('update$row[0]').disabled='true';
                            document.getElementById('delete$row[0]').disabled='true';
                            document.getElementById('option$row[0]').innerText='已上架';

                        };
                        if ($row[4]=='3'){
                            document.getElementById('option$row[0]').innerText='已下架';
                        };
                        </script>";
                echo '</tr>';
                // 判断是否点击修改按钮
                if (!empty($_POST["update$row[0]"])) {
                    echo '<tr align="center">';
                    echo "<td>$row[0]</td>
                        <td><input type='text' value='$row[1]' name='name'></td>
                        <td><input type='text' value='$row[2]' name='pic'></td>
                        <td><input type='text' value='$row[3]' name='price'></td>
                        <td>
                            <select name='status'>
                                <option value='1'>新增</option>
                                <option value ='2'>已上架</option>
                                <option value='3'>已下架</option>
                            </select>
                        </td>
                        <td><input type='submit' value='确认修改' name='updates$row[0]'></td>";
                    echo '</tr>';
                }
            }
            ob_end_flush();
            ?>
        </table>
    </form>
</div>
</body>
</html>