<?php
$servername = "localhost";
$username = "jj";
$password = "123";
$dbname = "xcyl";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT user, bankuai FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "bankuai: " . $row["bankuai"]. " - Name: " . $row["user"].   "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>