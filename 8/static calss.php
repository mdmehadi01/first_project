<?php
/*class base
{
    public $name="Md Mehadi Hassan Rabby";
    public function show()
        {
            echo $this->name;
        }
    
}
$test = new base();
$test->show();*/

/*class base
{
    public static $name="Md Mehadi H Rabby";
    public static function show()
        {
            echo self::$name;//static ar jonno self:: use kor te hoi

        }
    
}
//static use korle object create kora lagha na
//$test = new base();
//$test->show();
/*echo base::$name;
base :: show();*/


/*class base
{
    public static $name="Md M.H Rabby";
    public static function show()
        {
            echo self::$name;//static ar jonno self:: use kor te hoi

        }
        public function __construct($n)
        {
            self::$name =$n;
        }
    
}
//static use korle object create kora lagha na
$test = new base("wow");
$test->show();*/

class base
{
    public static $name="Md M.H Rabby";
}
class derived extends base
{
    public static function show()
        {
            echo parent::$name;//static ar jonno self:: use kor te hoi

        }
       
}
//static use korle object create kora lagha na
$test = new derived("wow");
$test->show();



?>