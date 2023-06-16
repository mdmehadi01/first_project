<?php
class person{

public $name = "No Name";
public $Age = 0;

function show()
{
    echo $this->name . "-" . $this->Age ;
}

}
$p1 = new person();
$p1->name="Md.Mehadi Hassan Rabby";
//$p1->Age = 20;

$p1 ->show();
?>