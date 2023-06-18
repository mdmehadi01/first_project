<?php
interface parent1
{
    function clac($a,$b);
}
interface parent2
{
    function sub($c,$d);
}
class childClass implements parent1, parent2
{
    public function clac ($a,$b)
    {
        echo $a+$b;
    }
    public function sub($c,$d)
    {
        echo $c-$d;
    }

}

$test= new childClass();
$test->clac(20,35);
echo"<br>";
$test->sub(20,35);

?>