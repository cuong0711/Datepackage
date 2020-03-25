<?php
namespace App\Support;
class Collection
{
    public function getAge($yearBirth, $timeZome = "Asia/Ho_Chi_Minh", $fomat = 'Y-m-d')
    {  
        $year = date($fomat);
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $year) && preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $yearBirth) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $yearBirth) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $year) ){
            $firstDate =strtotime($year);
            $secondDate = strtotime($yearBirth);
            if($firstDate >= $secondDate){
                return true; 
            }else{
                return false;
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
    public function getNextWeekDay($fomat = 'Y-m-d')
    {
        $nextDay = date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $nextDay) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $nextDay)){
            return true;
        }else{
            return false;
        }   
    }
    public function getDayLastWeek($fomat = 'Y-m-d')
    {
        $lastDay = date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $lastDay) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $lastDay)){
            return true;
        }else{
            return false;
        }   
    }
    public function getYesterday($timeZome  = "Asia/Ho_Chi_Minh" , $fomat='d-m-Y')
    {
        $lastDay = date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $lastDay) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $lastDay)){
            return true;
        }else{
            return false;
        }   
    }
    public function getTomorrow($timeZome = "Asia/Ho_Chi_Minh",  $fomat = 'd-m-Y')
    {
        $nextDay = date($fomat); 
        if(preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",  $nextDay) || preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $nextDay)){
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
    public function plusCurrentDay($numberDay ,$numberMonth , $numberYear,  $fomat = 'd-m-Y')
    {
        $date = date($fomat);
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$date) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0 ) {

            return  true;

        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0){

            return true;
        }else {

            return false ;
        }
    }
    public function plusDay($numberDay ,$numberMonth , $numberYear, $statend ,$fomat= 'd-m-Y')
    {
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$statend) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0 ) {

            return true;

        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $statend) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0){

            return true;
        }else{
        
            return false ;
        }
    }

    public function plusCurrentTime($numberhour , $numberMinute ,$timeZome = "Asia/Ho_Chi_Minh" ,$fomat ='d-m-Y h:i a')
    {     
        date_default_timezone_set($timeZome);
        $timeDate = date($fomat,time());
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",$timeDate) && $numberhour >= 0 && $numberMinute >= 0) {

            return true;
        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $timeDate) && $numberhour >= 0 && $numberMinute >= 0) {

            return true;
        }else{

            return false;
        }
    
    }
    public function plusTime($numberhour , $numberMinute , $timeDay)
    {
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",$timeDay) && $numberhour >= 0 && $numberMinute >= 0) {
      
            return true;
        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $timeDay) && $numberhour >= 0 && $numberMinute >= 0) {
   
            return true;
        }else{
        
            return false ;
        }
    }
    public function  subtractionCurrentDate($numberDay ,$numberMonth , $numberYear,  $fomat = 'd-m-Y')
    {
        $date = date($fomat);
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$date) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0 ) {
        
        
            return true;

        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $date) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0){
        
        return true;
        }else{
        
        return false;
        }
    }
    public function subtractionDate($numberDay ,$numberMonth , $numberYear, $endtime)
    {
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])/",$endtime) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0  ) {
            
        return true;
  
        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4})/",  $endtime) && $numberDay >= 0  &&  $numberMonth >=0 && $numberYear >=0){
            
        return true;
        }else{
        return false ;
        }
    } 
    public function  subtractionCurrentTime($numberhour , $numberMinute ,$timeZome = "Asia/Ho_Chi_Minh" ,$fomat ='d-m-Y h:i a')
    {
        date_default_timezone_set($timeZome);
        $timeDate = date($fomat,time());
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",$timeDate) && $numberhour >= 0 && $numberMinute >= 0) {
     
            return true;
        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $timeDate) && $numberhour >= 0 && $numberMinute >= 0) {

            return true;
        }else{
        
        return false;
        }
    }
    public function  subtractionTime($numberhour , $numberMinute ,$endtime ,$fomat ='d-m-Y h:i a')
    {
    
        if (preg_match("/(\d{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1]) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",$endtime) && $numberhour >= 0 && $numberMinute >= 0) {
      
            return true;
        }else if(preg_match("/(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(\d{4}) (?:2[0-4]|[01][1-9]|10):(([0-5][0-9]))/",  $endtime) && $numberhour >= 0 && $numberMinute >= 0) {
  
            return true;
        }else{
      
            return false ;
        }
    }
 

}


?>