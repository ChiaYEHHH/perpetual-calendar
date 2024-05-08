<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#">
  <title>萬年曆作業</title>
  <style>
    body {
      margin: 0;
    padding: 0;
    height: 100vh; /* 讓背景填滿整個畫面 */
    animation: gradientAnimation 10s infinite; /* 使用名為 gradientAnimation 的動畫，持續 10 秒，無限循環 */
    background: linear-gradient(to right, #ff5733, #ffbd69, #ffeea8); /* 初始漸層背景 */
    background-size: 200% auto; /* 設定漸層大小為原來的兩倍寬 */
    }

    .bgc_gradient {
      width: 100%;
      height: 100%;
      /* background: linear-gradient(to right, #ff7e5f, #feb47b, #ff7e5f);
      animation: gradientAnimation 10s ease infinite alternate; */
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }
      25% {
        background-position: 50% 100%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 50% 100%;
      }
    }
    .container {
      background-color: lightblue;
      width: 80%;
      height: 90vh;
      margin: auto;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;


    }

    .date {
      border: 5px double black;
      width: 12%;
      height: 8%;
      margin: auto;
    }
  </style>
</head>

<body>
  <h1>萬年曆</h1>
  <?php 
$week=['日','一','二','三','四','五','六'];
  ?>
  <div class="bgc_gradient">
    <div class="container">
      <?php 
      // foreach ($week as $w) {
      //   <div> $i </div>
      // }
      ?>
      <?php for ($i = 1; $i <= 49; $i++) : ?>
        <!-- /*請在這裹撰寫你的萬年曆程式碼*/   -->
        <!-- if($i) -->

        <div class="date"><?= $i; ?></div>

      <?php endfor; ?>
    </div>
</body>

</html>