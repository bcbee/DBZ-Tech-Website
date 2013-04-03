<?php
include('classes.php');
$input = $_GET['value'];
#echo $input;
search::process($input);
?>