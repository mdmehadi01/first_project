<?php
/*trait hello{
    private function sayhello()
    {
        echo"Hellow from Trait. \n";
    }
}
class base {
  use hello{
    hello::sayhello as public;
  }
}

$test = new base();
$test->sayhello();*/
trait hello{
    private function sayhello()
    {
        echo"Hellow from Trait. \n";
    }
}
class base {
  use hello{
    hello::sayhello as public newhello;
  }
}

$test = new base();
$test->newhello();
?>