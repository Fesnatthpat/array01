<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>แยกเลขคู่เลขคี่</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="input_numbers">ลำดับเลข (คั่นด้วย ","):</label>
                <input type="text" id="input_numbers" name="numbers" required>
                <br>
                <button type="submit">ส่งข้อมูล</button>
            </form>
        <br>
    <div id="result">
        <?php

// ตรวจสอบว่ามีการส่งข้อมูลมาหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['numbers'])) {
                    $numbers = explode(",", $_POST['numbers']); // แยกตัวเลขเป็นอาร์เรย์
    
                    // แยกเลขคู่ เลขคี่ เรียงลำดับ และตัดตัวเลขที่ซ้ำ
                    $even = [];
                    $odd = [];
                    foreach ($numbers as $number) {
                        $number = intval($number); // แปลงเป็นจำนวนเต็ม
                        if ($number % 2 == 0) {
                            $even[] = $number;
                        } else {
                            $odd[] = $number;
                        };
                    };
                    sort($even); // เรียงลำดับ
                    sort($odd);
    
                    // แสดงผล
                    echo "<h2>เลขคู่</h2>";
                    echo "<ul>";
                    foreach ($even as $number) {
                        echo "<li>$number</li>";
                    };
                    echo "</ul>";
    
                    echo "<h2>เลขคี่</h2>";
                    echo "<ul>";
                    foreach ($odd as $number) {
                        echo "<li>$number</li>";
                    };
                    echo "</ul>";
                };
            };



?>
    </div>
</body>

</html>