<?
 function sendmail($fromname, $frommail, $tomail, $subject, $type, $body) {
    $smtp_id = base64_encode("ssalguk@gmail.com"); 
    $smtp_pwd = base64_encode("gAl0h@!23"); 
    $smtp_server = "ssl://smtp.gmail.com";        //ssl ���������� �̿��ؾ� �Ѵ�.
    if (!$fp = fsockopen("$smtp_server", 465)) {   // ���� ����, ������ Ư���ϰ� 25���� �ƴ� 465�� port�� ����Ѵ�.
        die ("Connection fail \n"); 
    } 
    //Mail ������ ������ ���� ���۽�Ų��.
    fgets($fp, 128); 
    fputs($fp, "helo $smtp_server\r\n");  
    fgets($fp, 128);
    //���� �κ�
    fputs($fp, "auth login\r\n"); 
    fgets($fp,128); 
    fputs($fp, "$smtp_id\r\n"); 
    fgets($fp,128); 
    fputs($fp, "$smtp_pwd\r\n"); 
    fgets($fp,128);   
    //������ ���
    fputs($fp, "mail from: <$from>\r\n"); 
    fgets($fp, 128);
    //�޴� ���
    fputs($fp, "rcpt to: <$tomail>\r\n"); 
    fgets($fp, 128); 
    fputs($fp, "data\r\n");
    fgets($fp, 128); 
    //����
    fputs($fp, "Subject: $subject\r\n"); 
    fputs($fp, "MIME-Version: 1.0\n"); 
    fputs($fp, "\r\n");
//  ��ȣȭ�� ���� �Ϸ��� �Ʒ� �ּ� ����
// $body= chunk_split(base64_encode($body)); 
    fputs($fp, $body); 
    fputs($fp, "\r\n.\r\n"); 
    fgets($fp, 128); 
    fclose($fp); 
}
 
// �Ʒ����ʹ� ���� ���� �Դϴ�. DB���� �ҷ��ͼ� �����ų� ������ �ʿ信 �°� �ۼ� �Ͻø� �˴ϴ�.
 $fromname="�̻�"; 
 $frommail ="ssalguk@gmail.com"; 
 $tomail="jaydenlee@demonicsoul.com";
 $subject = "�ȳ�"; 
 $type = "text/html";   // ���� Ÿ��, HTML�� 
 $body = "�ȳ�"; 
 sendmail($fromname, $frommail, $tomail, $subject, $type, $body); //�����Լ� ȣ��
  ?>