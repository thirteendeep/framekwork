<?php 
include('/core/app.config.php'); 
include('/core/app.routing.php'); 
include('/core/app.application.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title><?= $site_name ?></title>
        <meta name="description" content="" />
        
        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <!-- CSS -->
        <link rel="stylesheet" href="/application/css/dist/styles.css" />

        <!-- Twitter -->
        <meta name="twitter:site" content="" />
        <meta name="twitter:title" content="" />
        <meta name="twitter:description" content="" /> 
        <meta name="twitter:creator" content="" />
        <meta name="twitter:image" content="" />

        <!-- Open Graph -->
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta property="og:site_name" content="" />

        <!-- Icons -->
        <link rel="shortcut icon" type="image/jpg" href="/application/images/favicon.jpg" /> <!-- Desktop -->
        <link rel="apple-touch-icon" sizes="76x76" href="/application/images/76x76.png"> <!-- iPad -->
        <link rel="apple-touch-icon" sizes="120x120" href="/application/images/120x120.png"> <!-- iPhone6 high DPI -->
        <link rel="apple-touch-icon" sizes="152x152" href="/application/images/152x152.png"> <!-- iPad high DPI -->
        <link rel="apple-touch-icon" sizes="180x180" href="/application/images/180x180.png"> <!-- iPhone6 plus high DPI -->
        
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="/application/js/vendor/html5shiv.js"><\/script>')</script>
            <script src="/application/js/plugins/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="site-container">
            <?php
            include($root.'/application/layouts/components/header.php');
            include($root.'/core/app.body.php');
            include($root.'/application/layouts/components/footer.php');
            ?>
        </div>
        
        <script>/*
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-xxxxxxxx', 'auto');
        ga('send', 'pageview');*/
        </script>
    </body>
</html>