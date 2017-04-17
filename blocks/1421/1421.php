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
    $less->compileFile('less/1421.less', 'css/1421.css');
    ?>
    <link href="css/1421.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

</head>
<body style="background: rgb(233,235,238)">
    <div class="container">
        <div class="pull-right col-md-4 col-xs-12">
            <aside class="sidebar">
                <div class="row">
                    <?php include './1421-content.php'; ?>
                </div>
            </aside>
        </div>
    </div>
</body>
</html>