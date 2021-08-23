<?php
$arr = [5,1,8,9,3,2,6];
function reverseArr($arr)
{
	$length = count($arr);
	$temp="";
	for($i=0,$j=$length-1;$i<=floor($length/2);$i++,$j--)//loop over the half of the array length
	{
	  if($i==$j)//if we reach the half break out of the loop
	  {
	  	break;
	  }	
	  $temp=$arr[$i];
	  $arr[$i]=$arr[$j];
	  $arr[$j]=$temp;
	}
	return $arr;
}

$arr= reverseArr($arr);
print_r($arr)

?>