<?php
namespace App\Support;
class Collection
{
    public function getAge($yearBirth)
    {  
        $year = date('Y');
        if($yearBirth > $year ){
            return false; 
        }else{
            return true;
        }
    }
    public function getToday($timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d')
    {
        date_default_timezone_set($timeZome);
    
        $today= date($fomat, time()); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $today)){
            return true;
        }else{
            return false;
        }
        
    }
    public function getWeek($fomat = 'Y-m-d')
    {
        $today= date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $today)){
            return true;
        }else{
            return false;
        }
    }
    public function getLastWeek($fomat = 'Y-m-d')
    {
        $lastWeek= date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $lastWeek)){
            return true;
        }else{
            return false;
        }
    }
    public function  getNextWeek($fomat = 'Y-m-d')
    {
        $nextWeek= date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $nextWeek)){
            return true;
        }else{
            return false;
        }
    }
  
    public function getNow($timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d h:i')
    {
        $dateTime= date($fomat, time()); 
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $dateTime)){
            return true;
        }else{
            return false;
        }
    }
    public function seachFrstDay($date)
    {
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date)){
            return true;
        }else{
            return false;
        }
    }
    public function calculateDay($startDate, $endDate)
    {
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$startDate) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$endDate)){
            if($endDate>$startDate){
                return true;
            }else{
                return false;
            }
            
        }else{
            return false;
        }
    }
    public function  currentToDay($endDate , $timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d')
    {
        $today = date($fomat, time()); 
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$endDate) && preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$today)){
            return true;
        }else{
            return false;
        }
    }
    public function currentDistance($dateTime  ,$timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d h:i a')
    {
        $timeDay= date($fomat, time()); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $dateTime) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $timeDay)){
            return true;
        }else{
            return false;
        }
    }
    public function currentTime($startTime ,$endTime)
    {
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $startTime) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $endTime)){
            if ($endTime > $startTime) {
                return true;
            } else {
                return false;
            }
            
        }else{
            return false;
        }

    }
}

?>