<?php
trait hello{
    public function sayhello()
    {
        echo"Hellow from Trait. \n";
    }
}
trait hi{
    public function sayhello()
    {
        echo"Hellow from Hi \n";
    }
}
class base {
  use hello, hi
  {
    hello::sayhello insteadof hi;
    hi::sayhello as newhello;
  }
}

$test = new base();
$test->sayhello();
$test->newhello();//2ta k print korlam
?>