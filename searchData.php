<?php 

require('dbconnect.php');
$tname = $_POST["tname"];

$sql = "SELECT * FROM tb_detail WHERE team_name LIKE '%$tname%' ORDER BY team_name ASC";
$result = mysqli_query($connect, $sql);

$count = mysqli_num_rows($result);
$order = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disable</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
        body {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <div>
        <h1 class="text-center">Disable Table</h1>
        <hr>
        <div class="container" style="margin-bottom: 1em;">
            <form action="searchData.php" class="d-flex" method="POST">
                <input class="form-control me-2" type="search" name="tname" placeholder="ป้อนชื่อทีม">
                <button class="btn btn-outline-info ml-1" type="send">Search</button>
            </form>
        </div>
        <?php if ($count>0) { ?>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th><center>detail_id</th>
                    <th><center>team_name</th>
                    <th><center>id</th>
                    <th><center>detail_date</th>
                    <th><center>detail_address</th>
                    <th><center>detail_idp</th>
                    <th><center>detail_tel</th>
                    <th><center>detail_occ</th>
                    <th><center>detail_salary</th>
                    <th><center>detail_type</th>
                    <th><center>แก้ไข</th>
                    <th><center>ลบ</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) { ?>
                <tr>
                    <!-- <td><center><?php //echo $order++ ?></td> -->
                    <td><center><?php echo $row["detail_id"] ?></td>
                    <td><center><?php echo $row["team_name"] ?></td>
                    <td><center><?php echo $row["id"]?></td>
                    <td><center><?php echo $row["detail_date"] ?></td>
                    <td><center><?php echo $row["detail_address"] ?></td>
                    <td><center><?php echo $row["detail_idp"] ?></td>
                    <td><center><?php echo $row["detail_tel"] ?></td>
                    <td><center><?php echo $row["detail_occ"] ?></td>
                    <td><center><?php echo $row["detail_salary"] ?></td>
                    <td><center><?php echo $row["detail_type"] ?></td>
                    <td><center>
                        <a href="editForm.php?detail_id=<?php echo $row["detail_id"] ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td><center>
                        <a href="deleteQueryString.php?detail_id=<?php echo $row["detail_id"] ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <b><center>ไม่มีข้อมูล!!<center><b>
            </div>
        <?php } ?>
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
    </div>
</body>
</html>