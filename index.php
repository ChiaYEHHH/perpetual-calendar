<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <link rel="stylesheet" href="./css/style.css">


</head>

<body>
  <h1>Enjoy your days</h1>
   
 <?php
  // 寫出每個月的陣列
  $today = date("Y-m-d");
  $year = date("Y");
  $mon = date("m");
  $firstDay = strtotime(date("$year-$mon-1"));
  $firstWeekStartDay = date("w", $firstDay);
  $days = date("t", $firstDay);
  $month = [];
  for($i=1 ; $i <= 42 ; $i++){
    if ($i <= $firstWeekStartDay) {
      $month[] = 'QAQ';
    } elseif (($i - $firstWeekStartDay) <= $days) {
      $month[] = ($i - $firstWeekStartDay);
    } else {
      $month[] = 'OAO';
    }
    // 印出陣列內容
    // echo "<pre>";
    // print_r($month);
    // echo "</pre>";
}
if($mon+1>12){
  $mon=1;
  $year=$year+1;
}else{
  $mon=$mon+1;
}
if($mon-1<1){
  $mon=12;
  $year=$year-1;
}else{
  $mon=$mon-1;
}
?>
  <div class="nav">
    <div class="switch_lastmon">
      <a href="">
      <?php 
      $mon=$mon-1; 
      ?>
      上一個月
      </a>

    </div>
    <div class="premon"><?= date("F",$firstDay); ?></div>
    <div class="switch_nextmon"></div>
  </div>
  <?php
  $week = ['日', '一', '二', '三', '四', '五', '六'];
  ?>
  <div class="bgc_gradient">
    <div class="calendar">
      <?php
      foreach ($week as $w) : ?>
        <div class="week"><?= $w; ?> </div>
      <?php endforeach; ?>

      <?php foreach ($month as $m) : ?>
        <div class="date">
          
          <?= $m; ?>
        </div>
      <?php endforeach; ?>
    </div>
</body>

</html>