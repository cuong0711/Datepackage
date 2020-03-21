<?php 
use App\LibraryTime\Time;
require_once 'app/autoload.php'; 
$put  = new Time;
echo $put->calculateDay('2019-04-10','2019-05-10');

?>