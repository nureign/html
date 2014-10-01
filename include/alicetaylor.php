<?php

function get_random_string($type = '', $len = 10)
{
	$lowercase = 'abcdefghijklmnopqrstuvwxyz';
	$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numeric = '0123456789';
	$special = '`~!@#$%^&*()-_=+\\|[{]};:\'",<.>/?';
	$key = '';
	$token = '';
	if ($type == '') {
		$key = $lowercase.$uppercase.$numeric;
	} else {
		if (strpos($type,'09') > -1) $key .= $numeric;
		if (strpos($type,'az') > -1) $key .= $lowercase;
		if (strpos($type,'AZ') > -1) $key .= $uppercase;
		if (strpos($type,'$') > -1) $key .= $special;
	}
	for ($i = 0; $i < $len; $i++) {
		$token .= $key[mt_rand(0, strlen($key) - 1)];
	}
	return $token;
}

?>