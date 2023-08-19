<?php

$a = 10;
$b = "text";
$c = 20;
$d = 35;

echo "print single quotation : <br>";

print 'Given int : $a Given String : $b  <br><br>'; //didn't take the variable value 'Thease all only a string text'

echo "print double quotation : <br>";

print "Given int : $a Given String : $b+$c+$d <br><br>";

echo "echo single quotation : <br>";

echo 'It\'s escape sequence \' <br><br>';  //not take the single quotation

echo "echo double quotation : <br>";

echo "Given int : $a Given String : $b+$c+$d <br><br>";

echo "printf double quotation : <br>";

printf("Given int : $a Given String : $b+$c+$d <br><br>");

echo "printf single quotation : <br>";

$printf = printf('Given int : $a Given String is : $b+$c+$d <br><br>'); 

echo "printf returns length value $printf <br><br>";

$print = print ""; //print declares as a variable

echo "print is return = $print value <br><br>";

// $echo = echo" "; //echo didn't able to declared as a variable


?>