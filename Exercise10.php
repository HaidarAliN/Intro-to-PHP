<?php
function setUnion($arr1,$arr2)
{
  	function removeDuplicate($arr)
  	{
  	 $output =[];
  	 $output[] =$arr[0];
  	 foreach($arr as $val)
  	 {
  	  $index = array_search($val,$output);
  	  if($index or $val==$output[0]){//checks if the current value allready exsists
  	    continue;
  	  }
  	  $output[] = $val;//add the new value
  	 }
  	return $output;
  	}

  foreach($arr2 as $val){//merge two arrays
    $arr1[] = $val;
  }
  return removeDuplicate($arr1);
}
$test = setUnion([1,2,3,3,4,5],[3,1,5,9,8,7]);
print_r($test);
?>