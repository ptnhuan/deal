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
    $less->compileFile('less/1403.less', 'css/1403.css');
    ?>
    <link href="css/1403.css" rel="stylesheet" type="text/css"/>
    <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/type-1403.js" type="text/javascript"></script>

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
        <div class="section">
            <div class="row row-tl-20">
                <?php include './1403-content.php'; ?>  
            </div>
        </div>
    </div>

</body>
</html>