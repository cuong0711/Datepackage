<?php
namespace App\Support;
class Collection
{
    public function getAge($yearBirth, $timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d')
    {  
        $year = date($fomat);
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $year) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $yearBirth) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $yearBirth)){
            if($yearBirth >= $year ){
                return false; 
            }else{
                return true;
            }
        }else{
            return false;
        }
       
    }
    public  function getTime($timeZome = "Asia/Ho_Chi_Minh",  $fomat = 'h:i a')
    {
        date_default_timezone_set($timeZome);
        $date = date($fomat, time());
        if (preg_match("/^(?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $date)) {
            return true ;
        } else {
            return false;
        }
        
    }
    public function getToday($timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d')
    {
        date_default_timezone_set($timeZome);
    
        $today= date($fomat, time()); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $today) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $today)){
            return true;
        }else{
            return false;
        }
        
    }
    public function getWeek($fomat = 'Y-m-d')
    {
        $today= date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $today) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $today)){
            return true;
        }else{
            return false;
        }
    }
    public function getLastWeek($fomat = 'Y-m-d')
    {
        $lastWeek= date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $lastWeek) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $lastWeek)){
            return true;
        }else{
            return false;
        }
    }
    public function  getNextWeek($fomat = 'd-m-Y')
    {
        $nextWeek= date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $nextWeek) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $nextWeek)){
            return true;
        }else{
            return false;
        }
    }
  
    public function getNow($timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d h:i')
    {
        $dateTime= date($fomat, time()); 
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $dateTime) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $dateTime)){
            return true;
        }else{
            return false;
        }
    }
    public function seachFrstDay($date)
    {
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)){
            return true;
        }else{
            return false;
        }
    }
    public function calculateDay($startDate, $endDate)
    {
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$startDate) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$endDate) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $startDate) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $endDate)){
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
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$endDate) && preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$today) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $today) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $endDate)){
            return true;
        }else{
            return false;
        }
    }
    public function currentDistance($dateTime  ,$timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d h:i a')
    {
        $timeDay= date($fomat, time()); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $dateTime) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $timeDay) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $dateTime) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $timeDay)){
            return true;
        }else{
            return false;
        }
    }
    public function currentTime($startTime ,$endTime)
    {
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $startTime) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $endTime) ||  preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $startTime) ||  preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $endTime)){
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