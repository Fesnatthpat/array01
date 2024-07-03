<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>โปรแกรมนับจำนวนตัวเลข</title>
</head>

<body>
    <h1>โปรแกรมนับจำนวนตัวเลข</h1>

    <!-- แบบฟอร์ม HTML สำหรับรับข้อมูลลำดับเลขจากผู้ใช้ -->
    <form method="post">
        <label for="numbers">ลำดับเลข:</label>
        <input type="text" id="numbers" name="numbers" value="5,3,7,5,6,7,5,3">
        <button type="submit">หาค่า</button>
    </form>

    <?php
    // ตรวจสอบว่าฟอร์มถูกส่งด้วย method POST หรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าลำดับเลขจากฟอร์ม
        $numbers = $_POST["numbers"];

        // แปลงค่าลำดับเลขที่เป็น string ให้เป็น array โดยใช้ explode()
        $numbersArray = explode(",", $numbers);

        // นับจำนวนครั้งที่แต่ละตัวเลขปรากฏใน array ด้วย array_count_values()
        $countValues = array_count_values($numbersArray);

        // แสดงผลลัพธ์
        echo "<h2>ผลลัพธ์:</h2>";
        echo "<ul>";
        // วนลูป foreach เพื่อแสดงตัวเลขและจำนวนครั้งที่ปรากฏ
        foreach ($countValues as $number => $count) {
            echo "<li>เลข $number => $count ตัว</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>