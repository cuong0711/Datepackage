<?php
namespace  TimeNow\LibraryTime;
class timeHour
{
  
  public function yearNow()
  {
    
    return date('Y');
  }
  public function age($year_birth)
  {
    $day = date('Y');
    if($year_birth > $day){
        
        return 0; 
    }
    $age = $day - $year_birth;
    
        return $age;
  }
  public function now()
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    return date('m/d/Y h:i:s a', time()); 
  }
  public function toDay()
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    return date('m/d/Y', time());
  }
  public function yesterday()
  {
    $yesterday = date('d')-1;
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    return date(''.$yesterday.''.'/m/Y', time());
    
  }
  public function tomorrow()
  {
    $tomorrow = date('d')+1;
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    return date(''.$tomorrow.''.'/m/Y', time());
  }
  public function  nowTime()
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    return date(' h:i:s a', time()); 
  }
  public  function viewWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1){
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d' , $tmp);
    }
    $week = date('W', strtotime($date));
    
      return $week;

  }
  public  function lastWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $week_last =  $week - 1;
    
      return $week_last;
  }
  public function nextWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $week_next =  $week + 1;
    
    return $week_next;
    
  }
  public function nextWeekDay()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $week_to = $week +1;
    $week_day =  date('d') +7;
    $day  = "week : ".$week_to.":".date('Y-m-'.$week_day.'');
    
    return $day;
  }
  public function dayLastWeek()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $week_last = $week +1;
    $week_day =  date('d') +7;
    $day  = "week : ".$week_last.":".date('Y-m-'.$week_day.'');
    
    return $day;
    
  }

  public function  seachFrstDay($date)
  {
    $frst = strtotime($date);
    $frst = date("l", $frst);
    $frst = strtolower($frst);
    
    return $frst .":".date($date);
  }
  public function  dayDistance($start_date,$end_date)
  {
    $first_date =strtotime($start_date) ;
    $second_date = strtotime($end_date);
    if($first_date > $second_date){
        $effect = abs($first_date - $second_date);  
        $number_year = floor($effect / (365 * 60 *60 * 24));  
        $number_month  = floor(($effect - $number_year * 365 * 60 *60 * 24) / (30 * 60 * 60 * 24));  
        $number_day  = floor(($effect - $number_year * 365 * 60 *60 * 24 - $number_month * 30 * 60 * 60 * 24) / (60 * 60 * 24));  
        
        return $number_day;
      }else{
        $effect = abs( $second_date - $first_date);  
        $number_year = floor($effect / (365 * 60 * 60 * 24));  
        $number_month  = floor(($effect - $number_year * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $number_day  = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24)/ (60 * 60 * 24));  
        
        return $number_day;
      }
  }
  public function currentDayDistance($end_date)
  {
    $first_date =strtotime(date('Y-m-d'));
    $second_date = strtotime($end_date);
    if($first_date > $second_date){
        $effect= abs($first_date - $second_date);  
        $number_year = floor($effect / (365 * 60 * 60 * 24));  
        $number_month = floor(($effect - $number_year * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $number_day = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24)/ (60 * 60 * 24));  
        
        return $number_day;
      }else{
        $effect = abs($second_date - $first_date);  
        $number_year = floor($effect / (365 * 60 * 60 *24));  
        $number_month = floor(($effect - $number_year * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $number_day = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24)/ (60 * 60 * 24));
          
        return $number_day;
      }
  }
  public function currentDistance($date)
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $now_time = date('m/d/Y h:i ', time()); 
    $time_now  =  strtotime($now_time);
    $date_time  = strtotime($date);
    if($time_now < $date_time){
        $effect= abs($date_time - $time_now);  
        $number_year   = floor($effect / (365 * 60 * 60 * 24));  
        $number_month  = floor(($effect - $number_year * 365 * 60 * 60 * 24) / (30* 60 * 60 * 24));  
        $number_day    = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24) / ( 60 * 60 * 24));  
        $number_hour   = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 -$number_day* 60 * 60 * 24 ) / ($hour * 60 * 60));
        $number_minute = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 -$number_day* 60 * 60 * 24 - $hour*$hour * 60 * 60) / 60);
        $number_time =  $number_hour .":".$number_minute;
        
        return $number_time;
    }else{
        $effect = abs($date_time - $time_now);  
        $number_year = floor($effect / (365 * 60 * 60 * 24));  
        $number_month  = floor(($effect - $ynumberear * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $number_day  = floor(($effect - $number_year *  365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24) / (60 * 60 * 24));  
        $number_hour = floor(($effect - $number_year * 365 *60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 - $number_day * 60 *60*24 ) / ($hour * 60 * 60));
        $number_minute =  floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 - $number_day * 60 * 60 * 24 - $number_hour*$hour * 60 * 60) / 60);
        $number_time = $number_hour .":".$number_minute;
        
        return $number_time;
    }
  }
  public function timeDstance($start_time , $end_time)
  {
    $time_one  =  strtotime($start_time);
    $time_two = strtotime($end_time);
    if($time_one < $time_two){
        $effect = abs($time_two - $time_one);  
        $number_year = floor($effect / (365 * 60 * 60 * 24));  
        $number_month = floor(($effect - $number_year * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));  
        $number_day = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24) / ( 60 * 60 * 24));  
        $number_hour = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 - $number_day * 60 * 60 * 24 ) / (60 * 60));
        $number_minute =  floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 - $number_day * 60 * 60 * 24 - $number_hour * 60 * 60) / 60);
        $number_time =  $number_hour .":".$number_minute;
        
        return $number_time;
    }else{
        $effect = abs($time_two - $time_one);  
        $number_year = floor($effect / (365 * 60 * 60 * 24));  
        $number_month = floor(($effect - $number_year * 365 * 60 * 60 * 24) / (30* 60 * 60 * 24));  
        $number_day = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month *30* 60 * 60 * 24) / ( 60 * 60 * 24));  
        $number_hour = floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 - $number_day * 60 * 60 * 24 ) / (60 * 60));
        $number_minute =  floor(($effect - $number_year * 365 * 60 * 60 * 24 - $number_month * 30 * 60 * 60 * 24 - $number_day * 60 * 60 * 24 - $number_hour * 60 * 60) / 60);
        $number_time = $number_hour .":".$number_minute;
        
        return $number_time;
    } 
  }
}
  






?>