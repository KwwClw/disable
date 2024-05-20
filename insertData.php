<?php 

require('dbconnect.php');

$id = $_POST['id'];
$detail_date = $_POST['detail_date'];
$detail_address = $_POST['detail_address'];
$detail_idp = $_POST['detail_idp'];
$detail_tel = $_POST['detail_tel'];
$detail_occ = $_POST['detail_occ'];
$detail_salary = $_POST['detail_salary'];
$detail_type = $_POST['detail_type'];

if (isset($_POST['detail_care'])) {
    $detail_care = "Yes";
} else {
    $detail_care = "No";
}

if ($detail_care == "No") {
    $detail_care_name = "-";
    $detail_care_lastname = "-";    
    $detail_care_tel = "-";
    $detail_line = "-";
    $detail_facebook = "-";
} else {
    $detail_care_name = $_POST['detail_care_name'];
    $detail_care_lastname = $_POST['detail_care_lastname'];
    $detail_care_tel = $_POST['detail_care_tel'];
    $detail_line = $_POST['detail_line'];
    $detail_facebook = $_POST['detail_facebook'];
}

$sql = "INSERT INTO tb_detail (id, detail_date, detail_address, detail_idp, detail_tel, detail_occ, detail_salary, detail_type, detail_care, detail_care_name, detail_care_lastname, detail_care_tel, detail_line, detail_facebook) VALUES
    ('$id', '$detail_date', '$detail_address', '$detail_idp', '$detail_tel', '$detail_occ', '$detail_salary', '$detail_type', '$detail_care', '$detail_care_name', '$detail_care_lastname', '$detail_care_tel', '$detail_line', '$detail_facebook')";
// echo $sql;
$result = mysqli_query($connect, $sql);

if($result) {
    echo "<script>";
    echo "alert('บันทึกข้อมูลเสร็จสิ้น!');";
    echo "window.location = 'index.php';";
    echo "</script>";
} else {
    echo mysqli_error($connect);
}

?>