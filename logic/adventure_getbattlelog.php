<?php
include_once "./alicetaylor.php";

$bid = $_POST['bid'];
$seq = $_POST['seq'];

if( !isset($bid) || !isset($seq) )
{
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM battlelog WHERE bid = '$bid' AND seq = '$seq';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$att_name = $row['att_name'];
		$def_name = $row['def_name'];
		$def_maxhp = $row['def_maxhp'];
		$def_curhp = $row['def_curhp'];
		$dmg = $row['dmg'];
		$crit = $row['crit'];
		$snd = $row['snd'];
		$msg = $row['msg'];
	}

	echo json_encode(array(
		'att_name' => $att_name,
		'def_name' => $def_name,
		'def_maxhp' => $def_maxhp,
		'def_curhp' => $def_curhp,
		'dmg' => $dmg,
		'crit' => $crit,
		'snd' => $snd,
		'msg' => $msg
	));
}

$mysqli->close();

?>