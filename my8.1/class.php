<?php
class Myclass //class declire
{
    //verible k class a declire kor le take propirtes bole
    public $x,$y,$z;

    public function __construct($a,$b)//constractor
    {
        $this->x =$a;
        $this->y =$b;

    }

    public function mysum()//method
    {
        $this->z = $this->x + $this->y;
        return $this->z;
    }
}

$Rabby=new Myclass(100,120);
//$Rabby->x =100;
//$Rabby->y =150;
echo $Rabby->mysum();
 

?>