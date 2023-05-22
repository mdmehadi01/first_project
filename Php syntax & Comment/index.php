  
<?php
//php syntax:
// PHP code goes here
?>

<?php
//php te Comments:
// This is a single-line comment

# This is also a single-line comment
?>

<?php
/*
This is a multiple-lines comment block
that spans over multiple
lines*/
?>

<?php
//Creating (Declaring) PHP Variables
$text = "Hello world!";
$x = 5;
$y = 10.5;
echo $text;


//PHP এর তিনটি ভিন্ন পরিবর্তনশীল স্কোপ রয়েছে:
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>



