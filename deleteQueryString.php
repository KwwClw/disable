<?php 

require('dbconnect.php');

$detail_id = $_GET['detail_id'];

$sql = "DELETE FROM tb_detail WHERE detail_id = $detail_id";

$result = mysqli_query($connect, $sql);

if($result) {
    echo "ลบข้อมูลเรียบร้อย";
    echo "<a href='index.php'>กลับหน้าแรก<a>";
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น!');";
    echo "window.location = 'index.php';";
    echo "</script>";
} else {
    echo mysqli_error($connect);
}

?>