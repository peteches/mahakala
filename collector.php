<?php
$payload = array('missing'=>true);
if(isset($_POST['host'])){ $payload = $_POST; }
ob_start();
var_dump($payload);
$ob = ob_get_contents();
ob_end_clean();
$ob = explode("\n", $ob);
foreach($ob as $ob_line){
	error_log($ob_line);
}