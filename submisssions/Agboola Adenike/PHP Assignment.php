﻿

<?php
// Quiz 1
echo nl2br("I am Olapetan Adenike Funmilola \n
I am a Software QA Analyst\n
I am so keen at learning Web development\n
I believe at the end of this program I'll be a guru at web development\n
My Hobbies include learning new ideas, making friends,singing and Fashion Designing\n
I love to be a Software Engineer and I hope the knowledge gotten from here will help me in my QA")
?>

//Quiz 2
<?php
$x=2;
$y=4;
$z=6;
$result1=$x*$z;
$result2=$y-$x;
$result3=$z/$y;
echo "The product of x and z is:$result1 <br>";
echo "The difference of y and x is: $result2 <br>";
echo "The division of z by y is:$result3 <br>";
?>
//Quiz 3
<?php
$temp=25; 
switch($temp)
{
    case ($temp<=20):
        echo"It is really cold today";
        break;
    case ($temp>20 && $temp<30):
        echo"The weather is just perfect";
        break;
    case ($temp>=30 && $temp<40):
        echo"it is so hot today";
        break;
    default:
        echo"Am I in the Sahara Dessert";
}

?>
//Quiz 4(a)

<?php
for ($x=101; $x < 150;$x++){
	echo "The numbers are: .$x. <br>";
}
?>
//Quiz 4(b)
<?php
$i= 1
while ($i < 50){
	if($i%2==0)
        echo  "The numbers are : $i. <br>";
    $i++;
}	
?>

//Quiz 5

<?php
$name = Array("Wole ","Laide ","Dayo ");
$hobby= array("Napping","Reading","Coding");
$arraylength = count($name);
for ($x=0; $x < $arraylength; $x++){
    echo "My name is ".$name[$x]." ,I love  ".$hobby[$x];
	echo "<br>";
}

?>


//Quiz 6
<?php
function calMath($num1, $num2) {
    $sum = $num1 + $num2;
    $product=$num1*$num2;
    echo "The sum of num1 and num2 is : $sum <br>";
    echo "The  product of num1 and num2 is : $product";
}
?>
calMath(5,20);   
?>
