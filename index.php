<?php 
use App\LibraryTime\Time;
require_once 'app/autoload.php'; 
$put  = new Time;
echo $put->getTime();

?>