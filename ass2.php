<?php 
$number = -55.5 ;
echo("abs(-55.5) = ");
echo( abs($number))."<br>";      
echo ("round(-55.5) = ");
echo(round($number))."<br>";
echo("PI = ");
echo(pi())."<br>";

echo("min ( 2 , 5 , 10 , 8 , 55 ) = ");
echo(min(2,5,10,8,55))."<br>";

define("MESSAGE" , "Hello World ");
echo("constant with name MESSAGE = ");
echo(MESSAGE)."<br>";

echo("The Full Path : ");
echo(__DIR__)."<br>";
echo(__FILE__)."<br>";

$num1 = 10;
$num2 =20;

echo("Number1 * Number2 = ");
echo($num1 * $num2)."<br>";

echo("Number1 + Number2 = ");
echo($num1 + $num2 )."<br>";

echo("Number1 - Number2 = ");
echo($num1 - $num2 )."<br>";

echo("Number1 / Number2 = ");
echo($num1 / $num2 )."<br>";

echo("Number1 % Number2 = ");
echo($num1 % $num2 )."<br>";

echo("comparison operators :");
$larger = $num1 > $num2;
if($num1 > $num2){
    echo(" num1 > num2 ");
}else{
    echo("num1 < num2 ");
}
echo($larger)."<br>";

echo("Decrement Operators : ")."<br>";
$num1++;
echo($num1)."<br>";
++$num1;
echo($num1)."<br>";

echo("Increment Operators : ")."<br>";
$num2--;
echo($num2)."<br>";
--$num2;
echo($num2)."<br>";

$myString = "Welcom";
echo($myString)."<br>";

$len = strlen($myString);

if($len>=7){
    echo("accepted value")."<br>";
}else{
    echo("rejected value")."<br>";
}

$names = array("Sanaa" , "Sozan" , "Aseel" ,"Alaa" , "Naya");
echo"The Array : "."<br>";
foreach($names as $print){
    echo($print)."<br>";


}
  sort($names);
  echo("Sorted array : ")."<br>";
foreach($names as $print){

    echo($print)."<br>";
}

$myData = array("name" => "Sanaa" , "city" => "Gaza" , "phone_Number" => "059999999");
echo"Print Value : "."<br>";
foreach($myData as $value){
    echo($value)."<br>";
}
echo"Print Key and Value : "."<br>";

foreach($myData as $key => $value){
    echo($key);
    echo($value)."<br>";
}

function checked ($number){
    if(is_int($number)){
        if($number % 2 == 0){
            return true;
        }else{
            return false;
        }
    }else{
        echo("Is not integer");
    }

}
// echo checked("sss");
 echo checked(10)."<br>";


?>