<?php
function removeItemFromArray($arr,$val)
{
	foreach ($arr as $key => $value) {
		if ($value == $val)
		{
			for($i=$key;$i<count($arr)-1;$i++) //loop over the rest of the array
			{
				$arr[$i]=$arr[$i+1];//associate the next value to the current value
			}
			array_pop($arr);
			return $arr; 
		}
	}
	return $arr;
}

$arr = [1,2,3,7,8,2,3];
$arr = removeItemFromArray($arr,1);
print_r($arr);
?>