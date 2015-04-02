<?php

function Eratosthenes($_number){
	for($i=2;$i<$_number;$i++){
		$num[$i]=1;
	}
	$num[0]=0;
	$num[1]=0;
	for($i=2;$i<$_number;$i++){
		for($j=2;$j*$i<$_number;$j++){
			$num[$i*$j]=0;
		}
	}

	for($i=0;$i<$_number;$i++){
		if($num[$i]==1){
			$return[]=$i; 
		}
	}
	return $return;
}

$prime=Eratosthenes(1000);

foreach ($prime as $key => $value) {
	echo $value."\n";
}

?>