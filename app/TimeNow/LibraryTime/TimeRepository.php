<?php
namespace  TimeNow\LibraryTime;
class Time
{
  
  public function getYear()
  {
    
    return date('Y');
  }
  public function getAge($yearBirth)
  {
    $year = date('Y');
    if($yearBirth > $year){
        
        return "Aggregate value"; 
    }
    $age = $year - $yearBirth;
    
        return $age;
  }
  public function getNow($timeZome = "Asia/Ho_Chi_Minh",$fomat = 'm/d/Y h:i:s a')
  {
    date_default_timezone_set($timeZome);
    
    return date($fomat, time()); 
  }
  public function getToDay($timeZome = "Asia/Ho_Chi_Minh",$fomat = 'm/d/Y')
  {
    date_default_timezone_set($timeZome);
    
    return date($fomat, time());
  }
  public function getYesterday($timeZome  = "Asia/Ho_Chi_Minh",$fomat = '/m/Y')
  {
    $yesterday = date('d') - 1;
    date_default_timezone_set($timeZome);
    
    return date(''.$yesterday.''.$fomat , time());
    
  }
  public function getTomorrow($timeZome = "Asia/Ho_Chi_Minh",$fomat = '/m/Y')
  {
    $tomorrow = date('d') + 1;
    date_default_timezone_set($timeZome);
    
    return date(''.$tomorrow.''.$fomat , time());
  }
  public function  getTime($timeZome = "Asia/Ho_Chi_Minh",$fomat = 'h:i:s a')
  {
    date_default_timezone_set($timeZome);
    
    return date($fomat, time()); 
  }
  public  function getWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1){
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d' , $tmp);
    }
    $week = date('W', strtotime($date));
    
      return $week;

  }
  public  function getLastWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekLast =  $week - 1;
    
      return $weekLast;
  }
  public function getNextWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekNext =  $week + 1;
    
    return $weekNext;
    
  }
  public function getNextWeekDay()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekTo = $week +1;
    $weekDay =  date('d') + 7;
    $day  = "week : ".$weekTo.":".date('Y-m-'.$weekDay.'');
    
    return $day;
  }
  public function getDayLastWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekLast = $week  - 1;
    $weekDay =  date('d') - 7;
    $day  = "week : ".$weekLast.":".date('Y-m-'.$weekDay.'');
    
    return $day;
    
  }

  public function  seachFrstDay($date)
  {
    $frst = strtotime($date);
    $frst = date("l", $frst);
    $frst = strtolower($frst);
    
    return $frst .":".date($date);
  }
  public function  calculateDay($startDate,$endDate)
  {
    $firstDate =strtotime($startDate);
    $secondDate = strtotime($endDate);
    if($firstDate > $secondDate){
        $effect = abs($firstDate - $secondDate);  
        $numberYear = floor($effect / (365 * 60 *60 * 24));  
        $numberMonth  = floor(($effect - $numberYear * 365 * 60 *60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay  = floor(($effect - $numberYear * 365 * 60 *60 * 24 - $numberMonth * 30 * 60 * 60 * 24) / (60 * 60 * 24));  
        
        return $numberDay;
      }else{
        $effect = abs( $secondDate - $firstDate);  
        $numberYear = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth  = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay  = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24)/ (60 * 60 * 24));  
        
        return $numberDay;
      }
  }
  public function currentToDay($endDate)
  {
    $firstDate =strtotime(date('Y-m-d'));
    $secondDate = strtotime($endDate);
    if($firstDate > $secondDate){
        $effect= abs($firstDate - $secondDate);  
        $numberYear = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24)/ (60 * 60 * 24));  
        
        return $numberDay;
      }else{
        $effect = abs($secondDate - $firstDate);  
        $numberYear = floor($effect / (365 * 60 * 60 *24));  
        $numberMonth = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24)/ (60 * 60 * 24));
          
        return $numberDay;
      }
  }
  public function currentDistance($date,$timeZome = "Asia/Ho_Chi_Minh",$fomat = 'm/d/Y h:i')
  {
    date_default_timezone_set($timeZome);
    $nowTime = date($fomat, time()); 
    $timeNow  =  strtotime($nowTime);
    $dateTime  = strtotime($date);
    if($timeNow < $dateTime){
        $effect= abs($dateTime - $timeNow);  
        $numberYear   = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth  = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30* 60 * 60 * 24));  
        $numberDay    = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24) / ( 60 * 60 * 24));  
        $numberHour   = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 -$numberDay* 60 * 60 * 24 ) / ($hour * 60 * 60));
        $numberMinute = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 -$numberDay* 60 * 60 * 24 - $hour*$hour * 60 * 60) / 60);
        $numberTime =  $numberHour .":".$numberMinute;
        
        return $numberTime;
    }else{
        $effect = abs($dateTime - $timeNow);  
        $numberYear = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth  = floor(($effect - $ynumberear * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay  = floor(($effect - $numberYear *  365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24) / (60 * 60 * 24));  
        $numberHour = floor(($effect - $numberYear * 365 *60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay * 60 *60*24 ) / ($hour * 60 * 60));
        $numberMinute =  floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay * 60 * 60 * 24 - $numberHour*$hour * 60 * 60) / 60);
        $numberTime = $numberHour .":".$numberMinute;
        
        return $numberTime;
    }
  }
  public function currentTime($startTime,$endTime)
  {
    $timeOne  =  strtotime($startTime);
    $timeTwo = strtotime($endTime);
    if($timeOne < $timeTwo){
        $effect = abs($timeTwo - $timeOne);  
        $numberYear = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $numberDay = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24) / ( 60 * 60 * 24));  
        $numberHour = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay * 60 * 60 * 24 ) / (60 * 60));
        $numberMinute =  floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay * 60 * 60 * 24 - $numberHour * 60 * 60) / 60);
        $numberTime =  $numberHour .":".$numberMinute;
        
        return $numberTime;
    }else{
        $effect = abs($timeTwo - $timeOne);  
        $numberYear = floor($effect / (365 * 60 * 60 * 24));  
        $numberMonth = floor(($effect - $numberYear * 365 * 60 * 60 * 24) / (30* 60 * 60 * 24));  
        $numberDay = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth *30* 60 * 60 * 24) / ( 60 * 60 * 24));  
        $numberHour = floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay * 60 * 60 * 24 ) / (60 * 60));
        $numberMinute =  floor(($effect - $numberYear * 365 * 60 * 60 * 24 - $numberMonth * 30 * 60 * 60 * 24 - $numberDay * 60 * 60 * 24 - $numberHour * 60 * 60) / 60);
        $numberTime = $numberHour .":".$numberMinute;
        
        return $numberTime;
    } 
  }
}
  






?>