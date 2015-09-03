<?php
include "sqrtclass.php";
$object =new sqrtclass;


$answer=$object->squareroot(49);
if($answer == 7)
{
	 echo "\nPositive argument test runs successfully \n";
}
else
{
	echo "Positive argument test fails\n";
}

$answer=$object->squareroot(-49);
if($answer == -1)
{
	 echo "\n negative argument test runs successfully \n";
}
else
{
	echo "negative argument test fails\n";
}

$answer=$object->squareroot();
if($answer == -1)
{
	 echo "\nNumber of arguments check test successfully \n";
}
else
{
	echo "Number of arguments check test fails\n";
}

$answer=$object->squareroot(0);
if($answer == 0)
{
	 echo "\nZero value argument test runs successfully \n";
}
else
{
	echo "Zero value argument test fails\n";
}

$answer=$object->squareroot(5.0);
if(abs($answer-2.2360679774998) < 0.00001)
{
	 echo "\n Float value argument test runs successfully \n";
}
else
{
	echo "Float value argument test fails\n";
}

$answer=$object->squareroot("vsh");
if($answer == -1)
{
	 echo "\nString Argument type check test runs successfully \n";
}
else
{
	echo "String Argument type check test fails\n";
}

$answer=$object->sqrtfun("$");
if($answer == -1)
{
	 echo "\nSpecial character test runs successfully \n";
}
else
{
	echo "Special character test fails\n";
}

?>

