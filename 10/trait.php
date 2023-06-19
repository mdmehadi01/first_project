<?php
trait hello
{
public function sayhello()

{
echo"Hello to all!";

}
}
trait bye
{
public function saybye()

{
echo"bye to all!";

}
}
class base 
{
use hello,bye;
}
class base2
{
use hello;
}
$test= new base();
$test->sayhello();
$test->saybye();

?>