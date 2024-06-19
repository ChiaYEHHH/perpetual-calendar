<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



</head>

<body>
  <!-- <h1>Enjoy your days</h1>
  <a href="test.php">測試頁</a> -->
  <?php
  // 寫出每個月的陣列
  $today = date("Y-m-d");
  $year = $_GET['year'] ?? date("Y");
  $mon = $_GET['mon'] ?? date("m");
  $firstDay = strtotime(date("$year-$mon-1"));
  $firstWeekStartDay = date("w", $firstDay);
  $days = date("t", $firstDay);
  $week = ['日', '一', '二', '三', '四', '五', '六'];
  $month = [];
  for ($i = 1; $i <= 42; $i++) {
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
  if ($mon + 1 > 12) {
    $nextMon = 1;
    $nextYear = $year + 1;
  } else {
    $nextMon = $mon + 1;
    $nextYear = $year;
  }
  if ($mon - 1 < 1) {
    $lastMon = 12;
    $lastYear = $year - 1;
  } else {
    $lastMon = $mon - 1;
    $lastYear = $year;
  }
  ?>


  <div class="container">
    <div class="row">
      <div class="col">
        <div class="aside">
          <div class="box_Year"></div>
          <div class="box_Day"></div>
          <div class="box_clock"></div>
          <div class="box_pic"></div>
        </div>
      </div>
      <div class="col">
        <div class="calendar">
          <div class="nav">
            <div class="div">
              <a href="index.php?year=<?= $lastYear; ?>&mon=<?= $lastMon; ?>">上個月</a>
            </div>
            <div class="div">
              <?= $year; ?>年 <?= $mon; ?>月
            </div>
            <div class="div">
              <a href="index.php?year=<?= $nextYear; ?>&mon=<?= $nextMon; ?>">下個月</a>
            </div>
          </div>
          <!-- 月曆主體 -->
          <div class="main">
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
        </div>
      </div>

    </div>

  </div>


</body>

</html>

<!-- 小動物亂跑 hover 時，小動物停頓 -->
<!-- 想動畫或互動 -->