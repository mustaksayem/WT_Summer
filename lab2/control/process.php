<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$Operation=$_POST["Operation"];
$num1=(float)$num1;
$num2=(float)$num2;

if ($Operation=="add")
{
    echo "Your 1st number is ".$num1." and your 2nd number is ".$num2." and summation is ".$num1+$num2;
}
if ($Operation=="substraction")
{
    echo "Your 1st number is ".$num1." and your 2nd number is ".$num2." and substraction is ".$num1-$num2;
}
if ($Operation=="multiplication")
{
    echo "Your 1st number is ".$num1." and your 2nd number is ".$num2." and multiplication is ".$num1*$num2;
}
if ($Operation=="division")
{
    echo "your 1st number is ".$num1." and your 2nd number is ".$num2." and division is ".$num1/$num2;
}

?>