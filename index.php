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
  $mon = 5;
  $firstDay = strtotime(date("$year-$mon-1"));
  $firstWeekStartDay = date("w", $firstDay);
  $days = date("t", $firstDay);
  // 月份切換
  $last_mon=$mon-1;
  $next_mon=$mon+1;
  if($next_mon > 12){
    $newMon=1;
    $newYear=$year+1;
  }else{
    $newMon=$next_mon;
    $newYear=$year;
  }
  if($last_mon < 1){
    $newMon=12;
    $newYear=$year-1;
  }else{
    $newMon=$last_mon;
    $newYear=$year;
  }
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
?>
<script>
  var mon = <?= $monChange; ?>
  function changeMon(mon) {
    // mon = last_mon;
    return mon;
  }
  </script>
<button onclick="changeMon(<?= $last_mon; ?>)">
  上一個月
</button>
<button onclick="changeMon(<?= $next_mon; ?>)">
  下一個月
</button>

<div class="nav">
    <div class="switch_lastmon">
      
      
      </div>
    
      <div class="premon"><?= date("F",$firstDay); ?></div>
      
      
    </div>
  </div>
  <?php
  $week = ['日', '一', '二', '三', '四', '五', '六'];
  ?>
  <div class="bgc_gradient">
    <div class="calendar">
      <?php
      // 周一至周五
      foreach ($week as $w) : ?>
        <div class="week"><?= $w; ?> </div>
      <?php endforeach; ?>
        <!-- 日曆 -->
      <?php foreach ($month as $m) : ?>
        <div class="date">
          
          <?= $m; ?>
        </div>
      <?php endforeach; ?>
    </div>
</body>

</html>