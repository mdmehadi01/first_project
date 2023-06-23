<?php
/*function fruits(array $name){
    foreach($name as $name){
        echo $name  . "<br>";
    }
}

$test=["Apple"];
fruits ($test);*/
//multipull vallue
/*function fruits(array $name){
    foreach($name as $name){
        echo $name  . "<br>";
    }
}

$test=["Apple","Orange","Banana"];
fruits ($test);*/
//classes ar example
/*class hello{
    public function sayhello(){
        echo"Hello Everyone";
    }
}
class bye{
    public function saybye(){
        echo"ByeAll";
    }
}
//common function banate hobe
function wow( bye $c)
{
    $c->saybye();
}
$test = new bye();
wow($test);*/

////////-----//hinting main part--------///////////

class school{
    public function getNames($names){
       foreach ($names->Names() as $name){
        echo $name . "<br>";
       }
    }
}
class students{
    public function Names(){
        return ["Mehadi","Hassan","Rabby"];
    }
}

$test = new students();
$test1 = new school();

$test1->getNames($test)
?>