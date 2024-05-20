<?php 

require('dbconnect.php');

$sql = "SELECT * FROM tb_detail ORDER BY detail_id ASC";
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
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="p-3 mb-2 bg-gray-100">
    <div class="container mx-auto overflow-x-auto p-6 bg-white rounded shadow-md">
        <h1 class="text-center text-2xl font-bold">Disable Table</h1>
        <hr class="my-4">
        <div class="mb-3">
            <form action="searchData.php" class="flex space-x-2" method="POST">
                <input class="flex-grow p-2 border border-gray-300 rounded" type="search" name="tname" placeholder="ป้อนชื่อทีม">
                <button class="rounded p-2 bg-blue-500 text-white" type="submit">Search</button>
            </form>
        </div>
        <?php if ($count>0) { ?>
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_id</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">id</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_date</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_address</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_idp</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_tel</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_occ</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_salary</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">detail_type</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">แก้ไข</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">ลบ</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_array($result, MYSQLI_BOTH)) { ?>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_id"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["id"]?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_date"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_address"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_idp"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_tel"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_occ"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_salary"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row["detail_type"] ?></td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="editForm.php?detail_id=<?php echo $row["detail_id"] ?>" class="bg-blue-500 text-white rounded px-2 py-1"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="deleteQueryString.php?detail_id=<?php echo $row["detail_id"] ?>" class="bg-red-500 text-white rounded px-2 py-1" onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
            <div class="text-center p-3 mt-4 bg-red-100 text-red-500 border border-red-300 rounded">
                <b>ไม่มีข้อมูล!!</b>
            </div>
        <?php } ?>
        <a href="insertForm.php" class="bg-green-500 text-white rounded inline-block mt-4 p-2 mr-1">เพิ่มข้อมูล</a>
    </div>
</body>
</html>