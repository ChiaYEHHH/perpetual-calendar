<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">主頁</a>
<?php
// $mon = isset($nextMon) ? $nextMon : date("m");
$mon = isset($nextMon) ? $nextMon : date("m");

$newMon=newmonth() ;
function newmonth(){
    global $mon;
    return ($mon - 1) <= 0 ? 12 : $mon - 1;
}
?>
<!-- a href="?lastMon=<?= $newMon ?>"> -->
<a href="?lastMon=<?= $mon ?>">
    上一個月
</a>
<br>
<br>
mon<?= $mon ?>

</body>
</html>