<?php
$arr = [5,1,8,9,2];
$max= $arr[0];
$min=$arr[0];
foreach($arr as $value)
{
  if ($value<$min)
  {
    $min = $value;//update minimum
  }
  else if($value>$max)
  {
    $max=$value;//update maximum
  }
}
echo "The min value is: $min\n";
echo "The max value is: $max";
?>