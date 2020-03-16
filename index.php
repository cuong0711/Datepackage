<?php
use  TimeNow\LibraryTime\Time ;
use  TimeNow\Time\Hello ;
require_once 'app/start.php'; 
$put  = new  Time;
echo $put->getNow();
?>