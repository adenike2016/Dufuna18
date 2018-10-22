

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


**************************************
<?php
$temp=34;
if($temp<=20){
    echo "It is really cold today<br>";
}
elseif($temp>20 && $temp<30){
    echo "The weather is just perfect.<br>";
}
elseif($temp>30 && $temp<40){
    echo "It’s so hot today<Br>";
}
else{
    echo "Am I in the Sahara Desert?!<br>";
}
?>

//Quiz 4
<?php
while($x>100 && $x<150){
	echo "The numbers are: $x <br>";
	$x++;

?>
.........................
<?php
for ($x=101; $x < 150;$x++){
	echo "The numbers are: .$x. <br>";
}
?>
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

<?php
while ($i=1;$i<=50)
	echo "The numbers are : .$i. <br>";
	i++;
?>
........................................
<?php
for ($i=1;$i<=50; i++;){
	echo "The numbers are : $i <br>";
}
?>
//Quiz 5
<?php
$name = array("Wole","Laide","Dayo");
$hobbies = array("Napping","Reading","Coding");
$arrlength1 = count($name);
$arrlength2 = count($hobbies);

for($x= 0; $x < $arrlength1; $x++)
	($x= 0; $x < $arrlength2; $x++){
	echo "My name is " .$name[$x]. ", I love  " .$hobbies[$x]. }};
	echo "<br>";
}
?>
...................................

<?php
$name = array("Wole"=>"Napping","Laide"=>"Reading","Dayo"=>"Coding");
for each ($name as $x =$x_value){
	echo "My Name is ".$x. ", I love" .$x_value.
	echo "<br>";

?>

//Quiz 6
<?php
function calMath($num1, $num2) {
    $sum = $num1 + $num2;
    $product=$num1*$num2;
    echo "The sum of $num1 and $num2 is : $sum <br>";
    echo "The  product of $num1 and $num2 is : $product";
}
?>
calMath(3,20);   
?>
