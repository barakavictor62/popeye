<?php
$filename = 'http://192.168.0.4/popdocs/documents';
header("Content-disposition: attachment; filename = $filename");
readfile($filename);
?>