<html>
<head>
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/linearicons.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1406.less', 'css/1406.css');
    ?>
    <link href="css/1406.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body style="background: rgb(233,235,238)">
    <?php include './1406-content.php'; ?>
</body>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/1406.js"></script>
</html>