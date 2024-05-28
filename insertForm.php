<?php

require('dbconnect.php');

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
    <title>เพิ่มข้อมูล</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
        body {
            font-family: "Kanit", sans-serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
</head>
<body class="p-3 mb-2 bg-gray-100">
    <div class="container mx-auto overflow-x-auto p-6 bg-white rounded shadow-md">

        <h2 class="text-center text-2xl font-bold">แบบฟอร์มเพิ่มข้อมูล</h2>
        <hr class="my-4">
        <form action="insertData.php" method="POST">

        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
        <input type="hidden" name="admin_id" value="<?php echo $admin; ?>">

            <!-- <div class="mb-4">
                <label for="id" class="block font-medium text-gray-700">id</label>
                <select name="id" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
                    <option value="">---Select ID---</option>
                    <?php
                        for($i = 0; $i < $count; $i++) {
                            $rowm = mysqli_fetch_array($result_member, MYSQLI_BOTH);
                            echo "<option value=".$rowm["id"].">$rowm[0]</option>";
                        }
                    ?>
                </select>
            </div> -->
            <div class="mb-4">
                <label for="detail_date" class="block font-medium text-gray-700">ว/ด/ป เกิด</label>
                <input type="date" name="detail_date" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>
            <div class="mb-4">
                <label for="detail_address" class="block font-medium text-gray-700">ที่อยู่</label>
                <input type="text" name="detail_address" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1"">
            </div>
            <div class="mb-4">
                <label for="detail_idp" class="block font-medium text-gray-700">บปชช</label>
                <input type="text" name="detail_idp" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>
            <div class="mb-4">
                <label for="detail_tel" class="block font-medium text-gray-700">เบอร์โทร</label>
                <input type="text" name="detail_tel" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>
            <div class="mb-4">
                <label for="detail_occ" class="block font-medium text-gray-700">อาชีพ</label>
                <input type="text" name="detail_occ" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>
            <div class="mb-4">
                <label for="detail_salary" class="block font-medium text-gray-700">รายได้</label>
                <input type="text" name="detail_salary" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>
            <div class="mb-4">
                <label for="detail_type" class="block font-medium text-gray-700">ประเภทความพิการ</label>
                <input type="text" name="detail_type" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>

            <style>
                .answer {
                    display: none;
                }
                .question:has(input[type="checkbox"][value="1"]:checked) ~ .answer {
                    display: block;
                }
            </style>
            
            <div class="question mb-3 flex items-center">
                <label for="detail_care" class="font-medium text-gray-700 mr-2">คุณมีผู้แลรึเปล่า?</label>
                <input class="form-checkbox h-6 w-6" type="checkbox" name="detail_care" value="1">
            </div>
        
            <div class="answer mb-4">
                <label for="detail_care_name" class="block font-medium text-gray-700">ชื่อผู้ดูแล</label>
                <input type="text" name="detail_care_name" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>

            <div class="answer mb-4">
                <label for="detail_care_lastname" class="block font-medium text-gray-700">นามสกุลผู้ดูแล</label>
                <input type="text" name="detail_care_lastname" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>

            <div class="answer mb-4">
                <label for="detail_care_tel" class="block font-medium text-gray-700">เบอร์โทรผู้ดูแล</label>
                <input type="text" name="detail_care_tel" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>

            <div class="answer mb-4">
                <label for="detail_line" class="block font-medium text-gray-700">ไลน์ผู้ดูแล</label>
                <input type="text" name="detail_line" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>

            <div class="answer mb-4">
                <label for="detail_facebook" class="block font-medium text-gray-700">เฟซบุ๊คผู้ดูแล</label>
                <input type="text" name="detail_facebook" class="mt-1 p-2 bg-white text-1xl border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md focus:ring-1">
            </div>

            <div class="flex items-center space-x-2 mt-4">
                <input type="submit" value="บันทึกข้อมูล" class="bg-green-500 text-white rounded inline-block p-2">
                <input type="reset" value="ล้างข้อมูล" class="bg-red-500 text-white rounded inline-block p-2">
                <a href="index.php" class="bg-blue-500 text-white rounded inline-block p-2">กลับหน้าแรก</a>
            </div>
        </form>
    </div>
</body>
</html>
