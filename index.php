<?php
use  TimeNow\LibraryTime\Time ;
use  TimeNow\Time\Hello ;
require_once 'app/start.php'; 
$put  = new  Time;
 echo $put->currentTime('2014-09-27 10:00','2014-09-27 11:00');


?>