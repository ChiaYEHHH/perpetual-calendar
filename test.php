<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$w = 5; // 每行要寫入的數字個數
$day = 30;

$count = 1; // 起始數字

for ($i = 0; $i < $day; $i += $w) {
    for ($j = 0; $j < $w && $count <= $day; $j++) {
        echo $count . ' ';
        $count++;
    }
    echo "<br>";
}

?>
</body>
</html>