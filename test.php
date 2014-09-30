<?
 function sendmail($fromname, $frommail, $tomail, $subject, $type, $body) {
    $smtp_id = base64_encode("ssalguk@gmail.com"); 
    $smtp_pwd = base64_encode("gAl0h@!23"); 
    $smtp_server = "ssl://smtp.gmail.com";        //ssl 프로토콜을 이용해야 한다.
    if (!$fp = fsockopen("$smtp_server", 465)) {   // 소켓 생성, 구글은 특이하게 25번이 아닌 465번 port를 사용한다.
        die ("Connection fail \n"); 
    } 
    //Mail 형식을 소켓을 통해 전송시킨다.
    fgets($fp, 128); 
    fputs($fp, "helo $smtp_server\r\n");  
    fgets($fp, 128);
    //인증 부분
    fputs($fp, "auth login\r\n"); 
    fgets($fp,128); 
    fputs($fp, "$smtp_id\r\n"); 
    fgets($fp,128); 
    fputs($fp, "$smtp_pwd\r\n"); 
    fgets($fp,128);   
    //보내는 사람
    fputs($fp, "mail from: <$from>\r\n"); 
    fgets($fp, 128);
    //받는 사람
    fputs($fp, "rcpt to: <$tomail>\r\n"); 
    fgets($fp, 128); 
    fputs($fp, "data\r\n");
    fgets($fp, 128); 
    //제목
    fputs($fp, "Subject: $subject\r\n"); 
    fputs($fp, "MIME-Version: 1.0\n"); 
    fputs($fp, "\r\n");
//  암호화를 굳이 하려면 아래 주석 제거
// $body= chunk_split(base64_encode($body)); 
    fputs($fp, $body); 
    fputs($fp, "\r\n.\r\n"); 
    fgets($fp, 128); 
    fclose($fp); 
}
 
// 아래부터는 변수 설정 입니다. DB에서 불러와서 보내거나 각자의 필요에 맞게 작성 하시면 됩니다.
 $fromname="이상국"; 
 $frommail ="ssalguk@gmail.com"; 
 $tomail="jaydenlee@demonicsoul.com";
 $subject = "안녕"; 
 $type = "text/html";   // 메일 타입, HTML로 
 $body = "안녕"; 
 sendmail($fromname, $frommail, $tomail, $subject, $type, $body); //전송함수 호출
  ?>