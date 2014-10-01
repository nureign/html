<?php

require('./include/alicetaylor.php');

$email = $_POST['email'];

if( !isset($email) )
{
	exit;
}

$code = get_random_string('',6);
$message = "인증 문자를 보내드립니다. 아래 문자를 입력하세요. <br><br> $code";

mail($email, "에스트렐라 인증코드 입니다.", $message);

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "INSERT INTO project_authcode ( email, code ) VALUES ( '$email', MD5('$code') ) ON DUPLICATE KEY UPDATE code = MD5('$code');";
	$mysqli->query($sql);
}

$mysqli->close();

?>