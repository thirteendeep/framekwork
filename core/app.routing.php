<?php 

$section = (isset($_GET['section'])) ? $_GET['section'] : null;
$content = (isset($_GET['content'])) ? $_GET['content'] : null;

if ($section) {
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/'.$section."/".$content.".php");
}
else {
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/docs/index.php');
}
?>
