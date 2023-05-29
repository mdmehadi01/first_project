<?php

$marks =70;

if ($marks >=80 && $marks <=100){
    echo "You got A+";
}
else if ($marks >=70 && $marks <=79){
    echo "You got A";
}
else if ($marks >=60 && $marks <=69){
    echo "You got A-";
}
else if ($marks >=50 && $marks <=59){
    echo "You got B";
}
else if ($marks >=40 && $marks <=49){
    echo "You got C";
}
else if ($marks >=33 && $marks <=40){
    echo "You got D";
}
else if ($marks >=0 && $marks <=39){
    echo "You got F";
}
else
{
    echo "Invalid Marks";
}

?>