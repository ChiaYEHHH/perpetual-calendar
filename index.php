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
  <h1>萬年曆</h1>
  <?php
  $w = 5; // 每次增加的 '0' 數量
  $day = 30;

  $mon = []; // 建立一個空陣列

  $count = 1; // 起始數字

  for ($i = 1; $i <= 42; $i++) {
    if ($i <= $w) {
      $mon[] = 'QAQ';
    } elseif (($i - $w) <= $day) {
      $mon[] = ($i - $w);
    } else {
      $mon[] = 'QAQ';
    }
  }

  // 印出陣列內容
  echo "<pre>";
  print_r($mon);
  echo "</pre>";
  ?>
  <?php



  ?>
  <div class="nav">
    <div class="switch_lastmon"></div>
    <div class="premon"></div>
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


      <?php for ($i = 1; $i <= 42; $i++) : ?>
        <div class="date">
          <?php
          $today = date("Y-m-d");
          // echo $today;
          $year = date("Y");
          $mon = date("m");
          $firstDay = strtotime(date("$year-$mon-1"));
          $firstWeekStartDay = date("w", $firstDay);
          // echo $firstDay."周" . $firstWeekStartDay;
          $days = date("t", $firstDay);
          $month = [];

          if ($i <= $firstWeekStartDay) {
            $month[] = 'QAQ';
          } elseif (($i - $firstWeekStartDay) <= $days) {
            $month[] = ($i - $firstWeekStartDay);
          } else {
            $month[] = 'OAO';
          }
          ?>
          <?php= $month[]; ?>
        </div>
      <?php endfor; ?>
    </div>
</body>

</html>