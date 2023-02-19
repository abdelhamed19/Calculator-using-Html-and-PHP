<?php
declare(strict_types=1);
include 'auto.inc.php';

$oper=$_POST["oper"];
$num1=$_POST["num1"];
$num2=$_POST["num2"];

$obj= new cal ($oper,$num1,$num2);
echo $obj-> calculation ();