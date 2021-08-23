<?php
function binaryToDecimal($binary)
{
  $track=0;
  $current_value=0;
  $output=0;
  while($binary>0)
  {
    $current_value =$binary%10;// extract the digit on the  right
    $output += pow(2,$track)*$current_value;//calculate the output
    $track ++;//update the values
    $binary = floor($binary/10);
  }
  return $output;
}
echo binaryToDecimal(110);
?>