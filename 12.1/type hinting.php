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
*/

////////-----//hinting main part--------///////////

class school{
    public function getNames(students $names){
        echo"<ul>";
       foreach ($names->Names() as $name){

        echo "<li>"  .$name . "</li>";
       }
       echo"</ul>";
    }
}
class students{
    public function Names(){
        return ["Mehadi","Hassan","Rabby"];
    }
}
class laibary{

}
$lai = new laibary();
$test = new students();
$test1 = new school();
$test1->getNames($test)
?>