<?php
$con=mysqli_connect("localhost","root","","xcyl");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM `changjianbing` WHERE `time`='00:20:17'");

mysqli_close($con);
?>