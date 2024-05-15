<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูล</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
        body {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มเพิ่มข้อมูล</h2>
        <hr>
        <form action="insertData.php" method="POST">

            <div class="form-group">
                <label for="team_name">ชื่อทีม</label>
                <input type="text" name="team_name" class="form-control">
            </div>
            <div>
                <label for="id">id</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="detail_date">ว/ด/ป เกิด</label>
                <input type="date" name="detail_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="detail_address">ที่อยู่</label>
                <input type="text" name="detail_address" class="form-control">
            </div>
            <div class="form-group">
                <label for="detail_idp">บปชช</label>
                <input type="text" name="detail_idp" class="form-control">
            </div>
            <div class="form-group">
                <label for="detail_tel">เบอร์โทร</label>
                <input type="text" name="detail_tel" class="form-control">
            </div>
            <div class="form-group">
                <label for="detail_occ">อาชีพ</label>
                <input type="text" name="detail_occ" class="form-control">
            </div>
            <div class="form-group">
                <label for="detail_salary">รายได้</label>
                <input type="text" name="detail_salary" class="form-control">
            </div>
            <div class="form-group">
                <label for="detail_type">ประเภทความพิการ</label>
                <input type="text" name="detail_type" class="form-control">
            </div>

            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger ml-2">
            <a href="index.php" class="btn btn-primary ml-2">กลับหน้าแรก</a>
        </form>
    </div>
</body>
</html>