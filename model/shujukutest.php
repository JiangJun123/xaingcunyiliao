<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xcyl";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "INSERT INTO `xcyl`.`changjianbing`( `name`,`miaoshu`,`author`)
VALUES ('狂犬病', '感染病', '江俊11')";
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>