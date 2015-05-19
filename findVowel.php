<?php
$str = "Hello hOW arE YoU";

$match = preg_match('/[aeiou]+/i', $str, $matches);
for($i=0; $i<strlen($str); $i++)
{
	$match = preg_match('/[aeiou]+/i', $str[$i], $matches);
	if($match)
	{	$position_arr[$i]=$str[$i]; }
	
}

list($end) = array_keys(array_slice($position_arr, -1, 1, true)); //finding the end of an array
print("The Vowels 'a e i o u' found in the following positions ");
foreach($position_arr as $key=>$value)
{
	print $key;
	if($end!=$key)
	{
		echo ", ";
	}
}









?>
