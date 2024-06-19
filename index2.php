<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆作業</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            overflow: hidden;
        }

        body {
            /* background-color: cadetblue; */

        }

        .container {
            height: 90vh;
            /* background-color: chocolate */
        }

        .box_now {
            display: flex;
            flex-wrap: wrap;
        }

        .box_Mon {
            padding-top: 50px;
            transform: rotate(270deg);

        }

        .txt_Mon {
            font-size: 180px;
            font-family: "Nabla", system-ui;
            /* font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
                "EDPT" 122,
                "EHLT" 12; */
            /* transform: rotate(180deg); */
        }

        .box {
            width: 300px;
            height: 400px;

        }
    </style>
</head>

<body>
    <?php
$now_year=date('Y');

    ?>
    <div class="container bg-secondary mt-5">
        <div class="row w-100 h-100 justify-content-center align-items-center">
            <div class="col box_now bg-danger flex-row">
                <div class="box box_Year"><span class="txt_Mon"><?= date('Y'); ?></span></div>
                <div class="box box_Mon "><span class="txt_Mon"><?= date('M'); ?></span></div>
                <div class="box box_Clock">clock</div>
                <div class="box box_pic">
                    <img src="./pic/car.jpeg" srcset="">
                </div>
            </div>
            <div class=" col bg-info">
                <div class="calander">
                    214
                </div>
            </div>
        </div>
    </div>
</body>

</html>