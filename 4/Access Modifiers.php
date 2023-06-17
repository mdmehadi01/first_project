<?php
//public//protected//privet//a gula access modifire
/*class base
{
    public $name;
    public function __construct($n)
    {
        $this->name=$n;
    }
    public function show()
    {
        echo "Your Name :" . $this->name ."<br>";

    }

}
$test= new base("md.Mehadi");
$test->name="Md.Rabby";//overwrite korlam
$test->show();*/
//protected
/*class base
{
    protected $name;
    public function __construct($n)
    {
        $this->name=$n;
    }
    protected function show()
    {
        echo "Your Name :" . $this->name ."<br>";

    }

}
class derived extends base
{
    public function show()
    {
        echo "Your Name :" . $this->name ."<br>";

    }

}

$test= new derived("md.Mehadi");
//$test->name="Md.Rabby";//overwrite korlam
$test->show();*/
//privated
class base
{
    private $name;
    public function __construct($n)
    {
        $this->name=$n;
    }
    protected function show()
    {
        echo "Your Name :" . $this->name ."<br>";

    }

}
class derived extends base
{
    public function show()
    {
        echo "Your Name :" . $this->name ."<br>";

    }

}

$test= new derived("md.Mehadi");//private property k drive class a use kora jai na
$test->name="Md.Rabby";//overwrite korlam
$test->show();

?>