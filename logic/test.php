<?php
$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);
	Math.floor( Math.pow((NextLevel-1), 2) * ( Math.pow(NextLevel, 2) - (NextLevel * 13) + 82 ) );
	$exp = array();
	for($i=0; $i<5; $i++)
	{
		$exp[$i] = floor( pow( $i, 2 ) * ( pow( ($i+1), 2 ) - ( ($i+1) * 13 ) + 82 ));
	}

	$exp_model = json_encode($exp);
	$sql = "INSERT INTO config ( name, config ) VALUES ( 'exp', '$exp_model' ) ON DUPLICATE KEY UPDATE config = '$exp_model';";
	$mysqli->query($sql);

	$hp = array();
	for($i=0; $i<5; $i++)
	{
		$hp[$i] = floor( $i * 100 );
	}

	$hp_model = json_encode($hp);
	$sql = "INSERT INTO config ( name, config ) VALUES ( 'maxhp', '$hp_model' ) ON DUPLICATE KEY UPDATE config = '$hp_model';";
	$mysqli->query($sql);
}

$mysqli->close();
?>