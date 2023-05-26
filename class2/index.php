
<?php 
//$n1=10;
//$n2=15;
//$n3=34;
//if($n1>$n2 && $n1>$n3)
//echo $n1."is the biggest nuber";
//elseif($n2>$n1 && $n2>$n3)
//echo $n2."is the biggest nuber";
//else
//echo $n3."is the biggest nuber";
//if($n1<$n2 && $n1<$n3)
//echo $n1."is the biggest nuber";
//elseif($n2<$n1 && $n2<$n3)
//echo $n2."is the biggest nuber";
//else
//echo $n3."is the biggest nuber";

//word counT<><>
//$Name="Md Mehadi Hassan";
//$Count = strlen($Name);
//echo $Count;


//
// function sum($n1,$n2)//parameter
//{$sum=$n1+$n2; echo"The result is :" .$sum;}
//function div($n1,$n2)
//{
    //$result=$n1/$n2;
   // echo"The result of number is:".$result;}
//sum(55,11);//Argument
//div(44,11);
              //ata ke bole if-else ladder
//0-11 child
//12-16 teenager
//17-25 Young
//26-40Adult
//41-old
//if($age >=0 && $age <=11)
//echo "Child";
//elseif($age>=12 &&$age<=16)
//echo"Teenager";
//elseif($age>=17 &&$age<=25)
//echo"Young";
//elseif($age>=26 &&$age<=40)
//echo"Adult";
//elseif($age>=41)
//echo"Old";
//else
//echo"The age is not vaild";
$age=20;
switch ($age){
    case($age>=0 && $age<=11);
    echo"child";
    break;
    case($age>=12 && $age<=16);
    echo"Teenager";
    break;
    case($age>=17 && $age<=25);
    echo"Young";
    break;
    case($age>=26 && $age<=40);
    echo"Adult";
    break;
    case($age>=41);
    echo"Old";
    break;
    default:
           echo"invalid age";
    break;
}
