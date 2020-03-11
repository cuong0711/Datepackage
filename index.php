<?php
use  TimeNow\LibraryTime\timeHour ;
use  TimeNow\Time\Hello ;
require_once 'app/start.php'; 
$put  = new  timeHour;
echo $put->seachFrstDay('2020-3-11');
?>