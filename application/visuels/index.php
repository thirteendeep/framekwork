<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Globalia + Espaces</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <div>
        <header>
            <a href="#" id="trigger-menu" class="left fa fa-bars"></a> <img src="images/logo.png" alt="Globalia" class="left">
            <ul id="device-screen" class="right">
                <li id="phone"  data-url=""></li>
                <li id="tablet" data-url=""></li>
                <li id="tablet-l" data-url=""></li>
                <li id="desktop" class="active" data-url=""></li>
            </ul>
        </header>
        <div id="menu">
            <?php include('config.php'); ?>
        </div>
    </div>
    <div id="device" class="desktop" style="height: 841px;">
        <div class="iframelive">
            <iframe id="webframe" src=""></iframe>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/main.js"></script>
</body>
</html>
