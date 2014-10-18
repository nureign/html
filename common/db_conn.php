<?
		$mysqli = new mysqli($DB['localhost'], $DB['project'], $DB['project!'], $DB['project']);
		if (mysqli_connect_error()) {
			exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		}
		
		$mysqli->close($mysqli);

		mysql_query('set names utf8');
?>