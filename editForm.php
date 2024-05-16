<?php

require('dbconnect.php');
$detail_id = $_GET["detail_id"];

$sql = "SELECT * FROM tb_detail WHERE detail_id = $detail_id";
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);

$sql_member = "SELECT * FROM tb_member ORDER BY id ASC";
$result_member = mysqli_query($connect, $sql_member);
$rowm = mysqli_num_rows($result_member);
$count = $rowm;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
        body {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
</head>
<body class="p-3 mb-2">
    <div class="container my-3">

        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2>
        <hr>
        <form action="updateData.php" method="POST">

        <input type="hidden" value="<?php echo $row["detail_id"]; ?>" name="detail_id"> <!-- hide id -->

            <div class="form-group">
                <label for="team_name">ชื่อทีม</label>
                <input type="text" name="team_name" class="form-control" value="<?php echo $row["team_name"]; ?>">
            </div>
            <div class="form-group">
                <label for="id">id</label>
                <select name="id" class="form-control">
                    <option value="">---Select ID---</option>
                    <?php
                        for($i = 0; $i < $count; $i++) {
                            $rowm = mysqli_fetch_array($result_member, MYSQLI_BOTH);
                            echo "<option value=".$rowm["id"].">$rowm[0]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="detail_date">ว/ด/ป เกิด</label>
                <input type="date" name="detail_date" class="form-control" value="<?php echo $row["detail_date"]; ?>">
            </div>
            <div class="form-group">
                <label for="detail_address">ที่อยู่</label>
                <input type="text" name="detail_address" class="form-control" value="<?php echo $row["detail_address"]; ?>">
            </div>
            <div class="form-group">
                <label for="detail_idp">บปชช</label>
                <input type="text" name="detail_idp" class="form-control" value="<?php echo $row["detail_idp"]; ?>">
            </div>
            <div class="form-group">
                <label for="detail_tel">เบอร์โทร</label>
                <input type="text" name="detail_tel" class="form-control" value="<?php echo $row["detail_tel"]; ?>">
            </div>
            <div class="form-group">
                <label for="detail_occ">อาชีพ</label>
                <input type="text" name="detail_occ" class="form-control" value="<?php echo $row["detail_occ"]; ?>">
            </div>
            <div class="form-group">
                <label for="detail_salary">รายได้</label>
                <input type="text" name="detail_salary" class="form-control" value="<?php echo $row["detail_salary"]; ?>">
            </div>
            <div class="form-group">
                <label for="detail_type">ประเภทความพิการ</label>
                <input type="text" name="detail_type" class="form-control" value="<?php echo $row["detail_type"]; ?>">
            </div>

            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success mt-2">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger ml-2 mt-2">
            <a href="index.php" class="btn btn-primary ml-2 mt-2">กลับหน้าแรก</a>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>