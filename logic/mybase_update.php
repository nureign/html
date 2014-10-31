<?php

session_start();

include_once "../common/session_info.php";

$id = $_SESSION['id'];

if( !isset($id) )
	exit;

$res = array(
	'cc_level' => $_SESSION['base']['commandcenter'],
	'cc_price' => $_SESSION['cc_price'][$_SESSION['base']['commandcenter']],
	'cc_hp' => $_SESSION['cc_hp'][$_SESSION['base']['commandcenter']],
	'ra_level' => $_SESSION['base']['rader'],
	'ra_price' => $_SESSION['ra_price'][$_SESSION['base']['rader']],
	'ra_req' => $_SESSION['ra_req'][$_SESSION['base']['rader']],
	'ra_stat' => $_SESSION['ra_stat'][$_SESSION['base']['rader']],
	'ra_stat_next' => $_SESSION['ra_stat'][$_SESSION['base']['rader']+1],
	'de_level' => $_SESSION['base']['department'],
	'de_price' => $_SESSION['de_price'][$_SESSION['base']['department']],
	'de_req' => $_SESSION['de_req'][$_SESSION['base']['department']],
	'do_level' => $_SESSION['base']['dorm'],
	'do_price' => $_SESSION['do_price'][$_SESSION['base']['dorm']],
	'do_req' => $_SESSION['do_req'][$_SESSION['base']['dorm']],
	'do_stat' => $_SESSION['do_stat'][$_SESSION['base']['dorm']],
	'do_stat_next' => $_SESSION['do_stat'][$_SESSION['base']['dorm']+1]
);

echo json_encode($res);

?>