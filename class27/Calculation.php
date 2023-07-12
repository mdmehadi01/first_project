<?php
class Calculation{
    public $NumberOne=10;
    public $NumberTwo=20;
         public function_Constractor($n1,$n2) 
         {
            $this->NumberOne=$n1;
            $this->NumberTwo=$n2;
         }
    public static function calculateSum()
    {
        return $this->NumberOne + $this->NumberTwo;
    }

    public static function calculateSub(){
        return $this->NumberOne - $this->NumberTwo;
    }
}
    //$object = new Calculation(12,6);
  //echo $object->calculateSub();
  //echo calculation::calculateSum();