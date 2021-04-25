<?php

	for($i = 0;$i <= 7;$i++){
		echo "@";
		for ($j=0; $j < 4; $j++) { 
			echo "%";	
		}
	}	
	echo "<hr>";

	function fun($x,$y){
		$x = 4;
		$y = 1;
		$z = ($x+($y/$y)+$x);
		echo $z;
	}
	fun(3,2);

	echo "<hr>";

	function calc($price,$tax = 0){
		$total = $price+($price*$tax);
		echo $total;
	}
	calc(40,0.2);

	echo "<hr>";

	$x = 15;
	$y = 10;

	if($x > $y && $y != 10)
		print "sorry";
	else
		print "accept";

	echo "<hr>";

	$ar = "1malayalam2";

	for ($i=strlen($ar)-1; $i >= 0 ; $i--) { 
		echo $ar[$i];
	}

	echo "<hr>";

	$var = 230;
	function getvar(){
		$var = 23*100;
		return $var;	
	}
	$var = getvar();
	echo $var;

	echo "<hr>";

	$Rent = 5000;
	function Expenses($Other){
		$Rent = 2500 + $Other;
		return $Rent;
	}
	Expenses(500);
	echo $Rent;

	echo "<hr>";

	$bars = array('b1'=>array('wt'=>'20gm','len'=>'12cm'),
				'b2'=>array('wt'=>'1790000','len'=>'9cm')
			);

	echo $bars['b2']['len'];

	$salary = 35000;
	function salary($bonus){
		$salary = 35000+$bonus;
		return $salary;
	}
	$bonus = salary(5000);
	echo $salary;
?>
