<?php
$arr = [5,1,8,9,3,2,10];
$even = [];
$odd = [];
foreach($arr as $value)
{
  if ($value%2 ==0)//check if the value is even
  {
    $even[] = $value;
  }
  else
  {
    $odd[]= $value;
  }
}

print_r($even);
print_r($odd);
?>