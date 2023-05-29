<?php	
/*for ($i=2; $i<=100; $i+=2)	//..simple way
{ 	  
echo $i."<br> ";
} */
echo"Even number is: <br>";
for($i=2; $i<=100; $i++)
{
   if($i % 2 == 0)
    {
    echo$i.'<br>';
     }
}
//While loop:
// 1-100l print
   /* $i=1;
    while($i<=100)
    {
        echo $i."<br>";
        $i++;
    }*/
 
//do while loop
   /*do{
    echo $i."<br>";
    $i++;
   }while($i<=100);*/