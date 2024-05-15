<?php 

require('dbconnect.php');

$detail_id = $_POST['detail_id'];

$team_name = $_POST['team_name']; 
$id = $_POST['id'];
// $detail_date = date('detail_date', strtotime($_POST['detail_date']));
$detail_date = $_POST['detail_date'];
$detail_address = $_POST['detail_address'];
$detail_idp = $_POST['detail_idp'];
$detail_tel = $_POST['detail_tel'];
$detail_occ = $_POST['detail_occ'];
$detail_salary = $_POST['detail_salary'];
$detail_type = $_POST['detail_type'];

$sql = "UPDATE tb_detail SET
    team_name = '$team_name',
    id = '$id',
    detail_date = '$detail_date',
    detail_address = '$detail_address',
    detail_idp = '$detail_idp',
    detail_tel = '$detail_tel',
    detail_occ = '$detail_occ',
    detail_salary = '$detail_salary',
    detail_type = '$detail_type'
    WHERE detail_id = '$detail_id'";

$result = mysqli_query($connect, $sql);
// echo $sql;
if($result) {
    echo "แก้ไขข้อมูลเรียบร้อย";
    echo "<a href='index.php'>กลับหน้าแรก<a>";
    echo "<script>";
    echo "alert('อัปเดตข้อมูลเสร็จสิ้น!');";
    echo "window.location = 'index.php';";
    echo "</script>";
} else {
    echo mysqli_error($connect);
}

?>