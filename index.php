<?php
    session_start();

    $section = (isset($_GET['section'])) ? $_GET['section'] : null;
    $content = (isset($_GET['content'])) ? $_GET['content'] : null;


    include('core/app.application.php');
    include('application/layouts/application.php');

?>