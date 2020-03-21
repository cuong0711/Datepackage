<?php 
use App\LibraryTime\Time;
require_once 'app/autoload.php'; 
$put  = new Time;
echo $put->currentDistance("2020-03-20 10:30");

?>