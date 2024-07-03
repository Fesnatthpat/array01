<!DOCTYPE html>
<html>

<head>
    <title>หาค่าที่มากที่สุดตามลำดับที่ N</title>
</head>

<body>
<fieldset>
    <h1>โปรแกรมจะค่ามากที่สุดลำดับที่ N</h1>
    <form method="post">
        
        ลำดับเลข: <input type="text" name="numbers" value="15,30,55,10,25,14,18,22"><br>
        ลำดับที่ N: <input type="text" name="position" value="3"><br>
        <input type="submit" name="submit" value="หาค่า">
    </form>
</fieldset>
    <?php
    if (isset($_POST['submit'])) {
        $numbers = $_POST['numbers'];
        $position = intval($_POST['position']);

        // แปลงลำดับเลขเป็นอาร์เรย์และจัดเรียง
        $numberArray = explode(',', $numbers);
        rsort($numberArray); //rsort(เรียงจาก มาก ไป น้อย)

        // หาค่าที่มากที่สุดตามลำดับที่ N
        $result = $numberArray[$position - 1];
        echo "<p>ค่าที่มากที่สุดลำดับที่ $position คือ $result</p>";
    }
    ?>
</body>

</html>