<?php
 class base{
    public $name="Parent Class";
    public function calc($a,$b)
    {
        return $a*$b;
    }
 }
 class derived extends base
 {
    public $name ="Child Class";
   
 }
 $test =new derived();
 echo $test->calc(5,10);
?>