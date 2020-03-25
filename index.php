<?php 
use App\LibraryTime\Time;
require_once 'app/autoload.php'; 
$put  = new Time;
  echo "Khoảng cách 01-01-1995 -> 23-03-2020 :" .''. $put->calculateDay('01-01-1995','23-03-2020');
  echo "<br>";
  echo "Khoảng cách ngày hiện tại đến ngày 23-12-2020 :" .''.$put->currentToDay('23-12-2020');
  echo "<br>";
  echo "Khoảng cách thời gian hiện tại 23-12-2020 12:00 : " . ''. $put->currentDistanceTime('23-12-2020 12:00');
  echo "<br>";
  echo "Khoảng cách thời gian 12-02-2020 12:30 -> 12-03-2020 01:00 : " .'' .$put->currentTime('12-02-2020 12:30','12-03-2020 01:00');
  echo "<br>";
  echo "Cộng thêm 5 ngày 0 tháng 0 năm ở ngày hiên tại : ". '' . $put->plusCurrentDay(5,0,0);
  echo "<br>";
  echo "Cộng thêm 5 ngày 5 tháng 0 năm ở ngày hiên tại : ". '' . $put->plusCurrentDay(5,5,0);
  echo "<br>";
  echo "Cộng thêm 0 ngày 5 tháng 5 năm ở ngày hiên tại : ". '' . $put->plusCurrentDay(0,5,5);
  echo "<br>";
  echo "Cộng thêm 10 ngày 6 tháng 3 năm ở ngày hiên tại : ". '' . $put->plusCurrentDay(10,6,3);
  echo "<br>";
  echo "Cộng thêm 5 ngày 0 tháng 0 năm ở ngày 23-02-2012 :". '' . $put->plusDay(5,0,0,'23-02-2012');
  echo "<br>";
  echo "Cộng thêm 5 ngày 5 tháng 0 năm ở ngày 23-02-2012 : ". '' . $put->plusDay(5,5,0,'23-02-2012');
  echo "<br>";
  echo "Cộng thêm 0 ngày 5 tháng 5 năm ở ngày 23-02-2012 : ". '' . $put->plusDay(0,5,5,'23-02-2012');
  echo "<br>";
  echo "Cộng thêm 10 ngày 6 tháng 3 năm ở ngày 23-02-2012 : ". '' . $put->plusDay(10,6,3,'23-02-2012');
  echo "<br>";
  echo "Trừ bớt 5 ngày 0 tháng 0 năm ở ngày hiên tại : ". '' . $put->subtractionCurrentDate(5,0,0);
  echo "<br>";
  echo "Trừ bớt  5 ngày 5 tháng 0 năm ở ngày hiên tại : ". '' . $put->subtractionCurrentDate(5,5,0);
  echo "<br>";
  echo "Trừ bớt  0 ngày 5 tháng 5 năm ở ngày hiên tại : ". '' . $put->subtractionCurrentDate(0,5,5);
  echo "<br>";
  echo "Trừ bớt  10 ngày 6 tháng 3 năm ở ngày hiên tại : ". '' . $put->subtractionCurrentDate(10,6,3);
  echo "<br>";
  echo "Trừ bớt 5 ngày 0 tháng 0 năm ở ngày 23-02-2012 :". '' . $put->subtractionDate(5,0,0,'23-02-2012');
  echo "<br>";
  echo "Trừ bớt 5 ngày 5 tháng 0 năm ở ngày 23-02-2012 : ". '' . $put->subtractionDate(5,5,0,'23-02-2012');
  echo "<br>";
  echo "Trừ bớt 0 ngày 5 tháng 5 năm ở ngày 23-02-2012 : ". '' . $put->subtractionDate(0,5,5,'23-02-2012');
  echo "<br>";
  echo "Trừ bớt 10 ngày 6 tháng 3 năm ở ngày 23-02-2012 : ". '' . $put->subtractionDate(10,6,3,'23-02-2012');
  echo "<br>";
  echo "Cộng thêm 5 giờ 0 phút ở giờ hiện tại :". '' . $put->plusCurrentTime(5,0);
  echo "<br>";
  echo "Cộng thêm 0 giờ 30 phút ở giờ hiện tại : ". '' . $put->plusCurrentTime(0,30);
  echo "<br>";
  echo "Cộng thêm  5 giờ 25 phút giờ hiện tại : ". '' . $put->plusCurrentTime(5,25);
  echo "<br>";
  echo "Cộng thêm 5 giờ 0 phút  ở giờ  23-02-2020 13:00 : ". '' . $put->plusTime(5,0,'23-02-2020 13:00');
  echo "<br>";
  echo "Cộng thêm 0 giờ 30 phút ở giờ 23-02-2020 13:00 : ". '' . $put->plusTime(0,30,'23-02-2020 13:00');
  echo "<br>";
  echo "Cộng thêm  5 giờ 25 phút giờ 23-02-2020 13:00 : ". '' . $put->plusTime(5,25,'23-02-2020 13:00');
  echo "<br>";
  echo "Trừ bớt 5 giờ 0 phút ở giờ hiện tại :". '' . $put->subtractionCurrentTime(5,0);
  echo "<br>";
  echo "Trừ bớt 0 giờ 30 phút ở giờ hiện tại : ". '' . $put->subtractionCurrentTime(0,30);
  echo "<br>";
  echo "Trừ bớt  5 giờ 25 phút giờ hiện tại : ". '' . $put->subtractionCurrentTime(5,25);
  echo "<br>";
  echo "Trừ bớt 5 giờ 0 phút  ở giờ  23-02-2020 13:00 : ". '' . $put->subtractionTime(5,0,'23-02-2020 13:00');
  echo "<br>";
  echo "Trừ bớt 0 giờ 30 phút ở giờ 23-02-2020 13:00 : ". '' . $put->subtractionTime(0,30,'23-02-2020 13:00');
  echo "<br>";
  echo "Trừ bớt  5 giờ 25 phút giờ 23-02-2020 13:00 : ". '' . $put->subtractionTime(5,25,'23-02-2020 13:00');
?>