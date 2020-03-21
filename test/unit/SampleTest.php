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
        $yearBirth =  $this->url->getAge(1998);
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
        $time  =  $this->url->currentDistance('2014-09-27 10:00');
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


}
?>