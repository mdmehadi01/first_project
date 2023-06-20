<?php

/*trait hello{
    public function sayhello()
    {
        echo"Hellow from Trait. \n";
    }
}
class base {
    public function sayhello()
    {
        echo"Hellow from base class. \n";
    }
}
class child extends base {
    use hello; 
}


$test = new child();//Trait class ta bessi pariroty pai
$test->sayhello();*/

trait hello{
    public function sayhello()
    {
        echo"Hellow from Trait. \n";
    }
}
class base {
    public function sayhello()
    {
        echo"Hellow from base class. \n";
    }
}
class child extends base {
    use hello; 
    public function sayhello()//function banale child class ar vetor ar function pariroty aga pai
    {
        echo"Hellow from child class. \n";
    }
}


$test = new child();
$test->sayhello();


?>