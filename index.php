<?php 
use App\LibraryTime\Time;
require_once 'app/autoload.php'; 
$put  = new Time;
 echo $put->calculateDay('01-01-1777','23-03-2020');
  
?>