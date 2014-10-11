<?
	// 에러 감추기 위해 골뱅이 처리 부분적으로 했음! 14.10.11 토요일 오후 3시 11분 수정
		$host = "localhost";
		$dbid="project";
		$dbpass="project!";
		$dbname="project";

		function my_connect($host, $id, $pass, $db)
		{
			$connect = @mysql_connect($host, $id, $pass);
			@mysql_select_db($db);
			return $connect;
		}

		@$connect=my_connect($host, $dbid, $dbpass, $dbname);
?>