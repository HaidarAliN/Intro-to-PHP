<?php
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$arr1 = explode(", ",$list1);//split the list and store it in array
$arr2 = explode(", ",$list2);//split the list and store it in array

foreach($arr2 as $val)//merge the two lists
{
    $arr1[] = $val;
}
$output = array_unique($arr1);//remove duplicant
$output = array_values($output);//reset indexes
$list3 = "";
$length = count($output);
foreach ($output as $index => $value)  //loop over the final array to create the output
{
	if ($index != $length-1)
		{$list3 = $list3 . $value . ", ";}
	else
		{$list3 = $list3 . $value;}
}

echo "$list3";
?>