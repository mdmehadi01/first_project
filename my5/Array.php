<?php
/*//Index array
$City =array("Khulna","Khalishpur","Boira");
//echo $City;//error deba a vabe dela
//print_r($City);
echo $City[0];*/


//Associative Arrays
/*$City =array("Khulna","Khalishpur","Boira");
$run=array("Shakib"=>55,"Asib"=>49,"Rakib"=>101);
echo $run["Asib"];*/
//Multidimentional Array\
//Array na lekhe [] beraket dela hoi
/*$City =["Khulna","Khalishpur","Boira"];
$run=["Shakib"=>55,"Asib"=>49,"Rakib"=>101];
$student =array(
    array("Asib",23),
    array("Asib",23),
    array("Asib",23),
)*/
//for each loop ar kaj && order unorder list ar kaj
$City =["Khulna","Khalishpur","Boira"];
echo"</ul>";
foreach($City as $value)
{
echo "<li>$value </li>";
}
echo"</ul>";
?>