<?php

$max = 30;
$avg = 5;

$stats = array( 5, 5, 5, 5, 5, 5 );
$count = 0;

for($i=0; $i<$avg*3; $i++)
{
	$rand = rand( 0, 5 );

	if( $stats[$rand] > 0 )
	{
		$stats[$rand]--;
		$count++;
	}
}

for($i=0; $i<$count; $i++)
{
	$rand = rand( 0, 5 );
	$stats[$rand]++;
}

echo json_encode($stats);

?>