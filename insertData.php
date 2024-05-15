<?php 

require('dbconnect.php');

$team_name = $_POST['team_name'];
$id = $_POST['id'];
$detail_date = $_POST['detail_date'];
$detail_address = $_POST['detail_address'];
$detail_idp = $_POST['detail_idp'];
$detail_tel = $_POST['detail_tel'];
$detail_occ = $_POST['detail_occ'];
$detail_salary = $_POST['detail_salary'];
$detail_type = $_POST['detail_type'];

// $sql = "INSERT INTO tb_detail (team_name, id, detail_date, detail_address, detail_idp, detail_tel, detail_occ, detail_salary, detail_type, detail_care, detail_care_name, detail_care_lastname, detail_care_tel, detail_line, detail_facebook)
// VALUES ('$team_name', '$id', '$detail_date', '$detail_address', '$detail_idp', '$detail_tel', '$detail_occ', '$detail_salary', '$detail_type', '', '', '', '', '', '');"

$sql = "INSERT INTO tb_detail (team_name, id, detail_date, detail_address, detail_idp, detail_tel, detail_occ, detail_salary, detail_type, detail_care, detail_care_name, detail_care_lastname, detail_care_tel, detail_line, detail_facebook) VALUES
    ('$team_name', '$id', '$detail_date', '$detail_address', '$detail_idp', '$detail_tel', '$detail_occ', '$detail_salary', '$detail_type', '', '', '', '', '', '')";

$result = mysqli_query($connect, $sql);
// echo $sql;
if($result) {
    echo "บันทึกข้อมูลเรียบร้อย";
    echo "<a href='index.php'>กลับหน้าแรก<a>";
    echo "<script>";
    echo "alert('บันทึกข้อมูลเสร็จสิ้น!');";
    echo "window.location = 'index.php';";
    echo "</script>";
} else {
    echo mysqli_error($connect);
}

?>