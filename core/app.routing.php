<?php 
if ($section) {
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/'.$section."/".$content.".php");
}
else {
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/docs/index.php');
}
?>
