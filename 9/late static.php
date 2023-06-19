<?php
class base
{
    protected static $name ="Hellow World!";
    public function show()
    {
        echo static::$name;
        echo self::$name;
    }
}

class derived extends base{
    protected static $name ="I'm Comeing....";
}
$test= new derived();
$test->show();
?>