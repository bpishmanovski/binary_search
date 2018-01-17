// DSSP koja vo niza binarno ke prebaruva nekoj element.
// Testiranje na git
<?php
$a=[3,7,12,20,28,34,40,57,64,69,75,84,90,97];
$b = readline("Vnesi broj: ");
function BinarnoPrebaruvanje(array $a, $b)
{	
	$start=0;
	$end=sizeof($a);
	$mid=0;
	$found = false;
	while($start<=$end)
	{
		$mid=floor(($start+$end)/2);
		
		if($a[$mid]==$b)
		{
			$found=true;
			$index = $mid;
			break;
		}
		elseif($a[$mid]>$b)
		{
			$end=$mid-1;
		}
		elseif($a[$mid]<$b)
		{
			$start=$mid+1;
		}
	}
	if($found){
		echo "{$b} is found on position {$index} in the array\n";
	}
	else{
		echo "The number {$b} isn't found in the array\n";
	}
}

BinarnoPrebaruvanje($a,$b);
