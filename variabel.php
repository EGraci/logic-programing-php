<?php
// convert value
$int = (int) 123;
$str = (string) "abcde";
$doub = (double) 0.2;
$bool = (bool) true;
// manupulation string
$var = "Hello World !!! 123 &";

// split space and like this [Hello,World,!!!,123,&]
$split = explode(" ",$str);
// get char like this 'World !!!'
// format substr(string,left-to-rigt-split,lenght) 
substr($var,7,2);
// get char like this '23 &'
// - for lefft-to-right
substr($var,-4);

// count length string
// this is 5
echo strlen("Hello");

// convert string to char
// Array ( [0] => H [1] => e [2] => l [3] => l [4] => o )
print_r(str_split("Hello"));

// replace string
// like this 'Hello Dolly !!! 123 &'
echo str_replace("World", "Dolly", $var);
?>