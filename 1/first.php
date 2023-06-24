<?php
class calculation//class
{
    public $a,$b,$c;
    function sum()//method
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }

}
////object////////
$c1 =new calculation();
$c1->a =20;
$c1->b =5;

$c2=new calculation();
$c2->a =40;
$c2->b =30;

echo "Sum value of c1=" . $c1-> sum() . "\n";

echo "sub value of c2=" .$c2-> sub() .("\n");

echo "sub value of c1=" .$c1-> sub() .("\n");




?>