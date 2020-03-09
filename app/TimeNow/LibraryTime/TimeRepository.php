<?php
namespace  TimeNow\LibraryTime;
class TimeHour
{
  
  public function YearNow()
  {
    return date('Y');
  }
  public function Age($yearday)
  {
    $$yearnow = date('Y');
    if($yearday>$yearnow)
    {
        return 0; 
    }
    $age = $yearnow - $yearday;
        return $age;
  }
  public function Now()
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    return date('m/d/Y h:i:s a', time()); 
  }
  public function NowDay()
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    return date('m/d/Y', time());;
  }
  public function Yesterday()
  {
    $yesday = date('d')-1;
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    return date(''.$yesday.''.'/m/Y', time());
    
  }
  public function  Tomorrow()
  {
    $tomoday = date('d')+1;
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    return date(''.$tomoday.''.'/m/Y', time());
  }
  public function  NowTime()
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    return date(' h:i:s a', time()); 
  }
  public  function Weekyear()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1)
        {
          $tmp = strtotime('-1 day', strtotime($date));
          $date = date('Y-m-d', $tmp);
        }
      $week = date('W', strtotime($date));
      return $week;

  }
  public  function Weekester()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) 
    {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
      
    }
    $week = date('W', strtotime($date));
    $weekter =  $week-1;
    return $weekter;
  }
  public function Weekestomo()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1) 
    {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
      
    }
    $week = date('W', strtotime($date));
    $weekto =  $week+1;
    return $weekto;
    
  }
  public function Weekdaytomo()
  {
    $date = date('Y-m-d');
    while (date('w', strtotime($date)) != 1)
    {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }
    $week = date('W', strtotime($date));
    $weekto = $week +1;

    $weekday =  $$year['mday'] +7;
    $$yearnow  = "week ".$weekto.":".date('Y-m-'.$weekday.'');;
    return $$yearnow;
  }
  public function  Seachsunday($date)
  {
    $date = strtotime($date);
    $date = date("l", $date);
    $date = strtolower($date);
    return $date;
  }
  public function  Daydistance($datato ,$datafrom)
  {
    $first_date =strtotime($datato) ;
    $second_date = strtotime($datafrom);
    if($first_date>$second_date)
      {
            $difference= abs($first_date - $second_date);  
            $$year = floor($difference / (365*60*60*24));  
            $mon = floor(($difference - $year * 365*60*60*24) / (30*60*60*24));  
            $day = floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
            return $day;
      }
    else
      {
        $difference = abs( $second_date-$first_date);  
  
        $$year = floor($difference / (365*60*60*24));  
        $mon = floor(($difference - $year * 365*60*60*24) / (30*60*60*24));  
        $day = floor(($difference- $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
        return $day;
      }
  }
  public function DayNowdistance($datafrom)
  {
    $first_date =strtotime(date('Y-m-d')) ;
    $second_date = strtotime($datafrom);
    if($first_date>$second_date)
      {
        $difference= abs($first_date - $second_date);  
        $year = floor($difference / (365*60*60*24));  
        $mon = floor(($difference- $year * 365*60*60*24) / (30*60*60*24));  
        $day = floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
        return $day;
      }
    else
      {
        $difference = abs( $second_date-$first_date);  
        $$year = floor($difference / (365*60*60*24));  
        $mon = floor(($difference- $year * 365*60*60*24) / (30*60*60*24));  
        $day = floor(($difference- $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
        return $day;
      }
  }
  public function NowTimedistask($date)
  {
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $nowtime = date('m/d/Y h:i ', time()); 
    $timenow  =  strtotime($nowtime);
    $datetime  = strtotime($date);
    if($timenow<$datetime)
    {
        $difference= abs($datetime - $timenow);  
        $year = floor($difference/ (365*60*60*24));  
        $mon = floor(($difference- $year * 365*60*60*24) / (30*60*60*24));  
        $day = floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
        $hour = floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 )/(60*60));
        $minute =  floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 - $hour*60*60)/60);
        $time =  $hour .":".$minute ;
        return $time;
    }
  else
    {
        $difference = abs($datetime - $timenow);  
    
        $year = floor($difference / (365*60*60*24));  
        $mon = floor(($difference - $year * 365*60*60*24) / (30*60*60*24));  
        $day = floor(($difference- $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
        
        
        $hour = floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 )/(60*60));
        $minute =  floor(($$difference - $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 - $hour*60*60)/60);
        $time = $hour .":".$minute ;
        return $time;
    }
  }
  public function Timedistance($starttime , $endtime)
  {
    $time1  =  strtotime($starttime);
    $time2 = strtotime($endtime);
    if($time1<$time2)
    {
        $$difference = abs($time2 - $time1);  
        $year = floor($difference / (365*60*60*24));  
        $mon = floor(($difference- $year * 365*60*60*24) / (30*60*60*24));  
        $day = floor(($difference- $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
        $hour = floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 )/(60*60));
        $minute =  floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 - $hour*60*60)/60);
        $time =  $hour .":".$minute ;
        return $time;
    }
  else
    {
        $difference = abs($time2 - $time1);  
    
        $year = floor($difference / (365*60*60*24));  
        $mon = floor(($difference - $year * 365*60*60*24) / (30*60*60*24));  
        $day = floor(($difference - $year * 365*60*60*24 - $mon*30*60*60*24)/ (60*60*24));  
        
        
        $hour = floor(($difference- $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 )/(60*60));
        $minute =  floor(($difference- $year * 365*60*60*24 - $mon*30*60*60*24 -$day*60*60*24 - $hour*60*60)/60);
        $time = $hour .":".$minute ;
        return $time;
    } 
  }
}
  






?>