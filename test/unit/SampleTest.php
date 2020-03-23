<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Support\Collection;
class  SampleTest extends TestCase
{
    protected  $url ;
    public  function  setUp()
    {
        $this->url = new Collection;
    }
    public function testGetYearBirth()
    {
        $yearBirth =  $this->url->getAge('12-12-1999');
        $this->assertTrue($yearBirth);
    }
    public function testGetToday()
    {
        
        $dateToday= $this->url->getToday();
        $this->assertTrue($dateToday);
        
    }
    public  function testGetNow()
    {
        $dateTime= $this->url->getNow();
        $this->assertTrue($dateTime);
    }
    public function  testSeachFrstDay()
    {
        $frstDay= $this->url->seachFrstDay('2019-02-12');
        $this->assertTrue($frstDay);
    }
    public function testCalculateDay()
    {
        $dayTwo  = $this->url->calculateDay('2019-01-12','2019-06-12');
        $this->assertTrue($dayTwo);
    }
    public function  testCurrentToDay()
    {
        $dayTo =  $this->url->currentToDay('2019-02-02');
        $this->assertTrue($dayTo);
        
    }
    public  function testCurrentDistance()
    {
        $time  =  $this->url->currentDistance('2020-03-23 10:00');
        $this->assertTrue($time);
        
    }
    public function  testCurrentTime()
    {
        $timeDay = $this->url->currentTime('2014-09-27 10:00','2014-09-27 11:00');
        $this->assertTrue($timeDay);
        
    }
    public function testGetWeek()
    {
        $weekDay = $this->url->getWeek();
        $this->assertTrue($weekDay);
    }
    public function testGetLastWeek()
    {
        $weekLast = $this->url->getLastWeek();
        $this->assertTrue($weekLast);
        
    }
    public  function testGetNextWeek()
    {
        $weeekNext = $this->url->getNextWeek();
        $this->assertTrue($weeekNext);
    }
    public function testGetTime()
    {
        $timeNow = $this->url->getTime();
        $this->assertTrue($timeNow);
    }
    public function testGetNextWeekDay()
    {
        $nextDay = $this->url->getNextWeekDay();
        $this->assertTrue($nextDay);
    }
    public  function  testGetDayLastWeek()
    {
        $lastDay = $this->url->getDayLastWeek();
        $this->assertTrue($lastDay);

    }
    public function testGetYesterday()
    {
        $lastDay = $this->url->getYesterday();
        $this->assertTrue($lastDay);

    }
    public function testGetTomorrow()
    {
        $nextDay = $this->url->getTomorrow();
        $this->assertTrue($nextDay);

    }
    public function  testPlusCurrentDay()
    {
        $plusDay = $this->url->plusCurrentDay(21,0,0);
        $this->assertTrue($plusDay);
    }
    public function testPlusDay()
    {
        $plusDay = $this->url->plusDay(12,0,0 , '12-02-2012');
        $this->assertTrue($plusDay);
    }
     
    public function testPlusCurrentTime()
    {
        $plushour  = $this->url->plusCurrentTime(23,2);
        $this->assertTrue($plushour);
    }
    public function testPlusTime()
    {
        $plusTime  = $this->url->plusTime(12,2,'2012-02-01 12:00');
        $this->assertTrue($plusTime);
    }
    public function testSubtractionCurrentDate()
    {
        $subDate = $this->url->subtractionCurrentDate(21,2,1);
        $this->assertTrue($subDate);
         
    }
    public function  testSubtractionDate()
    {
        $subDate = $this->url->subtractionDate(12,1,2 , '12-02-2012');
        $this->assertTrue($subDate);
    }
    public function testSubtractionCurrentTime()
    {
        $subTime = $this->url->subtractionCurrentTime(21,1);
        $this->assertTrue($subTime);
    }
    public function testSubtractionTime()
    {
        $subTime = $this->url->subtractionTime(12,1, '2012-02-12 12:00');
        $this->assertTrue($subTime);
    }
   

}
?>