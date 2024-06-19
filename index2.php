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

        .box_row {
            display: flex;
            flex-wrap: wrap;
            height: 75vh;
        }
        .box{
            width: 50%;
            height: 50%;
        }

        .box_Mon {
            /* padding-top: 50px; */
            transform: rotate(270deg);
            /* background-color: aqua; */
        }

        .txt_Mon {
            /* font-size: auto; */
            font-family: "Nabla", system-ui;
            /* font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
                "EDPT" 122,
                "EHLT" 12; */
            /* transform: rotate(180deg); */
        }
        
        .box_Mon {
            /* width: 300px;
            height: 400px; */
            background-color: blueviolet;
            
        }
    </style>
</head>

<body>
    <?php
    $now_year = date('Y');

    ?>
    <div class="container bg-secondary mt-4">
        <div class="row cent">
            <div class="col-sm-12 col-md-6 col-lg-4  bg-danger flex-row">
                <div class="box_title w-100">
                    title
                </div>
                <div class="box_row">
                    <div class="box box_Year"><span class="txt_Year"><?= date('Y'); ?></span></div>
                    <div class="box box_Mon "><span class="txt_Mon bg-info"><?= date('M'); ?></span></div>
                </div>
                <div class="box_row">
                    <div class="box box_Clock">clock</div>
                    <div class="box box_pic">
                        pic
                        <!-- <img src="./pic/car.jpeg" srcset=""> -->
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-6 col-lg-8  bg-info">
                <div class="calander">
                    214
                </div>
            </div>
        </div>
    </div>
</body>

</html>