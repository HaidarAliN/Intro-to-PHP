<?php
function factorial($x)
	{
		if ($x<0)//check if the input valid
		{
			return 0;
		}

		if ($x<2)//special case
		{ 
		  	return 1;
		}

		$output = 1;
		for($i=2;$i <= $x; $i++)
		{
		    $output = $output*$i; //calculating the output
		}

		return $output;
	}
?>