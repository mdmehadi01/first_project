<?php
class person{

public $name,$Age;

function show()
{
    echo $this->name . "-" . $this->Age ;
}

}
$p1 = new person();
$p1->name="Md.Mehadi Hassan Rabby";
$p1->Age = 20;

$p1 ->show();
?>