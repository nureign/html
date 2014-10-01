<?
		$host = "localhost";
		$dbid="project";
		$dbpass="project!";
		$dbname="project";

		function my_connect($host, $id, $pass, $db)
		{
			$connect = mysql_connect($host, $id, $pass);
			mysql_select_db($db);
			return $connect;
		}

		$connect=my_connect($host, $dbid, $dbpass, $dbname);
?>