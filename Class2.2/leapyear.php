<?php


$year = 2012;


if($year % 4 == 0 & $year % 100 !=0 || $year % 400 == 0 ){
    echo $year." is Leap Year";
}else
echo $year." is not Leap Year";