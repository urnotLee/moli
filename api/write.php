<?php
//得到内容
$username = $_POST['username'];
$talk_content = $_POST['talk_content'];
$createtime = time();

//连接数据库
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
mysqli_query($conn, "SET NAMES UTF8");

//组装SQL语句
$sql = "INSERT INTO moli (username, talk_content, createtime) VALUES('{$username}', '{$talk_content}', '{$createtime}')";

//执行插入数据库操作
$result = mysqli_query($conn, $sql);

//判断是否插入成功
if ($result == 1) {
    echo '{"result":"ok"}';
} else {
    echo '{"result":"wrong"}';
}
//关闭数据库

mysqli_close($conn);
