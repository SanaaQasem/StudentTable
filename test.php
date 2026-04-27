<?php
//•	create php file (2degree)
//•	create 4 variables from this types [ string , integer , float , bool ] (8degree)
$name = "Sanaa"; //String
$age = 24 ;  //Integer
$avarege = 88.5 ; //Float
$isStudy = true ; //Boolean

//•	print data type for each variable (4degree)
echo("Data Types:");
echo(var_dump($name)); 
echo(var_dump($age)); 
echo(var_dump($avarege)); 
echo(var_dump($isStudy));


//•	print all variables (2degree)
echo("Prent Virable :");
echo("name :$name");
echo("age :$age");
echo("avarege :$avarege");
echo("isStudy :$isStudy");



//•	Apply the concept of local scope (4degree)
//o	Use this function  function myFunction(){

function myFunction(){
    $num1 = 2 ;
    $num2 =9 ;
    echo($num1 + $num2);
}

myFunction();

$myString = "Sanaa , Aseel ,Ahmed" ;

//o	Get the length (2degree)
echo(strlen($myString));

//o	Convert the string into upper case (2degree)
echo(strtoupper($myString));

//o	replaces some characters with some other characters (2degree)
echo(str_replace("s" , "h" ,$myString));

//o	reverse the string (1degree)
echo(strrev($myString));

//o	Split the string into an array by comma (3degree)
$arr = explode("," ,$myString);
var_dump($arr);


//•	Create variable from integer type then convert into float type (1degree)
$intNum = 10;
$newNum = (float) $intNum;
echo(var_dump($newNum));

//•	Create variable from float type then convert into int type (1degree)
$floatNum = 10.5 ;
$newNum2 =(int) $floatNum;
echo(var_dump($newNum2));

//•	Create variable from int type then convert into bool type (3degree)
//o	You must the result after convert operation  bool(false)

$x = "";
$y = (bool) $x;
echo(var_dump($y));


//•	Create variable from int type then convert into bool type (3degree)
//o	You must the result after convert operation  bool(false)

$xx = 0;
$yy = (bool) $xx ;
echo(var_dump($yy)) ;
?>