<?php
function conv_webutf($text)
{
	$text = iconv('UTF-8', 'UTF-16LE', $text);
	$cnt = strlen($text);
	$dec = 0;
	for($i = 0; $i < $cnt; $i ++) {
		$hex = pow(2, 8 * $i);
		$dec += ord($text[$i]) * $hex;
	}

	return $dec;
}

function josa($str, $tail1, $tail2)
{
	$text = iconv('UHC', 'UTF-8', $str);

	preg_match('/.$/u', $text, $temp);
	if(strlen($temp[0]) == 1) {
		if(preg_match('/[lmnr]/i', $temp[0]))
			return $str.$tail1;

		return (preg_match('/([aeiou][^aeiouwy]e|mb|ck)$/i', $str)) ? $str.$tail1 : $str.$tail2;
	}

	return ((conv_webutf($temp[0]) - 16) % 28 != 0) ? $str.$tail1 : $str.$tail2;
}
?>