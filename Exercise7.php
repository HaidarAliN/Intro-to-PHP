<?php
$arr = ["blue"=>1, "yellow"=>15, "green"=>12, "red"=>8, "orange"=>3];
$max= reset($arr);//get the first item of the array
$maxkey= key($arr);//get first key of the array
foreach ($arr as $key => $value) 
{
	if ($value > $max)
	{
		$max = $value;
		$maxkey = $key;
	}
}

echo $maxkey;
?>