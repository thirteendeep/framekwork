<?php 
if ($section) {
    include($_SERVER['DOCUMENT_ROOT'].'/application/view/'.$section."/".$content.".php");
}
else {
    include($_SERVER['DOCUMENT_ROOT'].'/application/view/docs/index.php');
}
?>
