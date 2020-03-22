<?php
namespace App\LibraryTime;


class Time
{

  public function getAge($yearBirth, $timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d')
  {
    $year = date($fomat);
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $year) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $yearBirth) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $yearBirth) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $year) ){
      $firstDate =strtotime($year);
      $secondDate = strtotime($yearBirth);
        if($firstDate >= $secondDate ){
          $effect= abs($firstDate - $secondDate);  
          $age = floor($effect / (365 * 60 * 60 * 24));  
          
          return $age;
        }else{
            return 'Aggregate value';
        }
    }else{
        return 'Aggregate value';
    }
  }
  public function getNow($timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d h:i')
  {
    date_default_timezone_set($timeZome);
    $dateTime = date($fomat, time());
    if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $dateTime) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $dateTime)){
            return $dateTime;
        }else{
            return 'Aggregate value';
        }
    
  
  }
  public function getToDay($timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d')
  {
    date_default_timezone_set($timeZome);
    $today = date($fomat, time());
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $today) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $today)){
      return $today;
    }else{
      return 'Aggregate value';
    }
    
  }
  public function getYesterday($timeZome  = "Asia/Ho_Chi_Minh" , $fomat='d-m-Y')
  {
    
    date_default_timezone_set($timeZome);
    $date = date($fomat);
    $yesterday = date('d') - 1;
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date)){
      
      return date('Y-m-'.$yesterday, time());
     
    }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)){
      return  date($yesterday.'-m-Y', time());
      
    }else{
      return 'Aggregate value';
    }

    
    
    
  }
  public function getTomorrow($timeZome = "Asia/Ho_Chi_Minh",  $fomat = 'd-m-Y')
  {
    
    date_default_timezone_set($timeZome);
    $date = date($fomat);
    $tomorrow = date('d') + 1;
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date)){
      
      return date('Y-m-'.$tomorrow, time());
     
    }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)){
      return  date($tomorrow.'-m-Y', time());
      
    }else{
      return 'Aggregate value';
    }

    
    return date(''.$tomorrow.''.$fomat , time());
  }
  public function  getTime($timeZome = "Asia/Ho_Chi_Minh",  $fomat = 'h:i a')
  {
    date_default_timezone_set($timeZome);
    $date = date($fomat, time());
    if (preg_match("/^(?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $date)) {
      return $date;
      
    } else {
      return 'Aggregate value';
    }
    
    
    return ; 
  }
  public  function getWeek($fomat = 'Y-m-d')
  {
    $date = date($fomat);
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)){
      while (date('w', strtotime($date)) != 1){
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d' , $tmp);
    }
    $week = date('W', strtotime($date));
    
        return $week .':'. $date;
        }else{
            return 'Aggregate value';
        }
   

  }
  public  function getLastWeek($fomat = 'Y-m-d')
  {
    $date = date($fomat);
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)){
      while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekLast =  $week - 1;
    
      return $weekLast;
    }else{
        return 'Aggregate value';
    }
   
  }
  public function getNextWeek($fomat = 'Y-m-d')
  {
    $date = date($fomat);
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)){
       while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekNext =  $week + 1;
    
    return $weekNext;
  }else{
    return 'Aggregate value';
  }
   
    
  }
  public function getNextWeekDay($fomat = 'Y-m-d')
  {

    $date = date($fomat);
     while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekTo = $week +1;
    $weekDay =  date('d') + 7;
    if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date)) {
        return 'Week :'.$weekTo .':'.date('Y-m-'.$weekDay, time());
    } else if( preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)) {
      return 'Week :'.$weekTo .':'.date($weekDay.'-m-Y', time());
    }else{
      return 'Aggregate value';
    }
    
   
   
  }
  public function getDayLastWeek($fomat = 'Y-m-d')
  {
    $date = date($fomat);
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekLast = $week  - 1;
    $weekDay =  date('d') - 7;
    if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $date)) {
      return 'Week :'.$weekLast .':'.date('Y-m-'.$weekDay, time());
    } else if( preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date))  {
      return 'Week :'.$weekLast .':'.date($weekDay.'-m-Y', time());
    }else{
      return 'Aggregate value';
    }
    
    

    
    
  }

  public function  seachFrstDay($date)
  {
    if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$date) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date)) {
      $frst = strtotime($date);
      $frst = date("l", $frst);
      $frst = strtolower($frst);
      
      return $frst .":".date($date);
		}else {
			return 'Aggregate value';
		}
  }
  public function  calculateDay($startDate, $endDate)
  {
    if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$startDate) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$endDate) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $startDate) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $endDate)){
      $firstDate =strtotime($endDate);
      $secondDate = strtotime($startDate);
      if($firstDate > $secondDate){
        $effect = abs($firstDate - $secondDate);  
        $numberYear = floor($effect / (365 * 60 *60 * 24));  
        $numberMonth  = floor(($effect - $numberYear * 365 * 60 *60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay  = floor(($effect - $numberYear * 365 * 60 *60 * 24 - $numberMonth  * 60 * 60 * 24) / (60 * 60 * 24));  
        
        return $numberDay;
      }else{
        return 'Aggregate value';
      }
      
    }else{
        return 'Aggregate value';
    }

  }
  public function currentToDay($endDate , $format = 'Y-m-d')
  {
    $timeDay = date($format);
    if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$endDate) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$timeDay) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $endDate) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $timeDay)  ) {
      $firstDate =strtotime($timeDay);
    $secondDate = strtotime($endDate);
    if($firstDate > $secondDate){
        $effect= abs($firstDate - $secondDate);  
        $numberYear = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth = floor(($effect - $numberYear * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay = floor(($effect - $numberYear  * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24)/ (60 * 60 * 24));  
        
        return $numberDay;
      }else{
        $effect = abs($secondDate - $firstDate);  
        $numberYear = floor($effect / (365 * 60 * 60 *24));  
        $numberMonth = floor(($effect - $numberYear  * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay = floor(($effect - $numberYear  * 60 * 60 * 24 - $numberMonth * 60 * 60 * 24)/ (60 * 60 * 24));
          
        return $numberDay;
      }
    } else {
        return 'Aggregate value';
    }
    
    
    
  }
  public function currentDistance($date, $timeZome = "Asia/Ho_Chi_Minh",  $fomat = 'd-m-Y h:i')
  {
    date_default_timezone_set($timeZome);
    $nowTime = date($fomat, time()); 
    if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $nowTime) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/", $date) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $nowTime) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $date)){
      $timeNow  =  strtotime($nowTime);
      $dateTime  = strtotime($date);
      if($timeNow < $dateTime){
        $effect= abs($dateTime - $timeNow);  
        $numberYear   = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth  = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30* 60 * 60 * 24));  
        $numberDay    = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24) / ( 60 * 60 * 24));  
        $numberHour   = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 -$numberDay * 60 * 60 * 24 ) / ( 60 * 60));
        $numberMinute = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay  * 60 * 60 * 24 - $numberHour  * 60 * 60) / 60);
        $numberTime = 'Day :'.$numberDay .' Hour: '. $numberHour .":".$numberMinute;
        
        return $numberTime;
    }else{
        $effect = abs($timeNow - $dateTime);  
        $numberYear   = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth  = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30* 60 * 60 * 24));  
        $numberDay    = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24) / ( 60 * 60 * 24));  
        $numberHour   = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 -$numberDay * 60 * 60 * 24 ) / ( 60 * 60));
        $numberMinute = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay  * 60 * 60 * 24 - $numberHour  * 60 * 60) / 60);
        $numberTime =  'Day :'.$numberDay .' Hour: '. $numberHour .":".$numberMinute;;
        
        return $numberTime;
    }
    }else{
      return 'Aggregate value';
    }
    
  
 }
  public function currentTime($startTime,  $endTime)
  {
    if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",$endTime) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",$startTime) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $startTime) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $endTime)){
      $timeOne  =  strtotime($startTime);
      $timeTwo = strtotime($endTime);

      if($timeOne < $timeTwo){
        $effect= abs($timeTwo - $timeOne);  
        $numberYear   = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth  = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30* 60 * 60 * 24));  
        $numberDay    = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24) / ( 60 * 60 * 24));  
        $numberHour   = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 -$numberDay * 60 * 60 * 24 ) / ( 60 * 60));
        $numberMinute = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay * 60 * 60 * 24 - $numberHour * $numberHour * 60 * 60) / 60);
        $numberTime = 'Day :'.$numberDay .' Hour: '. $numberHour .":".$numberMinute;
        
        return $numberTime;
        
        
    }else{
        return 'Aggregate value';
    }
  }else{
          return 'Aggregate value' ;
    }
  
   
  }
	
}
?>