<?php

namespace  TimeNow\Time;

class Hello 
{
	
	public function gettime($dt1,$dt2){
		if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dt1) &&  preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dt2)) {
			return $dt1;
		} else {
			return 'fffff';
		}
	}
 
	
}