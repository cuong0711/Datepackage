<?php
use  TimeNow\LibraryTime\TimeHour ;
require_once 'app/start.php'; 
$put  = new  TimeHour();
echo  $put->NowTimedistask('10/3/2020  8:00');
?>