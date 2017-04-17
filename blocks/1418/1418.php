<html>
<head>
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1418.less', 'css/1418.css');
    ?>
    <link href="css/1418.css" rel="stylesheet" type="text/css"/>
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <style type="text/css">
        .section {
            position: relative;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
        .row-tl-20 {
            margin-top: -20px;
            margin-bottom: -20px;
        }
    </style>
</head>
<body style="background: rgb(233,235,238)">
    <div class="container">
        <div class="pull-right col-md-4 col-xs-12" style="background: #fff; padding: 20px;
    border-radius: 3px;">
            <aside class="sidebar">
                <div class="row">
                    <?php include './1418-content.php'; ?>  
                </div>
            </aside>
        </div>
    </div>
</body>

<script src="js/swiper.min.js" type="text/javascript"></script>
<script src="js/type-1418.js" type="text/javascript"></script>
</html>