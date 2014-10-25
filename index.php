<?
	/*
		에스트렐라에 사용된 모든 소스코드는 저작권의 보호를 받습니다.
		제작자 : 김종원, 이상국
	*/
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active" align="center">
          <img src="images/index_bg1.gif" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>이 세상의 원천에는 자원이 있다!</h1>
              <p>궁극적으로 더 나은 생활을 위해서는 자원개발이 필수일지도 모릅니다.<br />자원을 찾고 종족을 위해 플레이어가 직접 되어보세요.</p>
              <p><a class="btn btn-lg btn-primary" href="./join_member.php" role="button">지금 바로 가입하기</a></p>
            </div>
          </div>
        </div>
        <div class="item" align="center">
          <img src="images/index_bg2.gif" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>새로운 신규 이벤트!</h1>
              <p>신규회원의 특전을 진행합니다.<br />매일 오후8시부터 10시동안 펼쳐지는 2시간 경험치 이벤트!<br />20% 경험치가 빠르게 오르기 때문에 순위권을 노려보는 사용자들에게 최고의 선물!<br />14년 11월 11일에 시행합니다! 자세한 사항은 차후 올라오는 공지사항을 확인하세요!</p>
              <p><a class="btn btn-lg btn-primary" href="#" onClick="message_event()" role="button">이벤트 확인하기</a></p>
            </div>
          </div>
        </div>
        <div class="item" align="center">
          <img src="images/index_bg3.gif" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>계정을 안전하게 지키는 방법!</h1>
              <p>에스트렐라 코리아에서는 절대로 운영자가 유저분들의 비밀번호를 요구하지 않습니다.<br />보다 더 안전한 방법을 위해 조만간 제공될 OTP 기능을 사용할 수 있도록 준비중에 있습니다.<br />자세한 사항은 별도의 공지사항을 참고해주시기 바랍니다!</p>
              <p><a class="btn btn-lg btn-primary" href="#" onClick="message_secure()" role="button">보안센터로 이동</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.carousel -->
    <br />
    
<div class="row" align="center">
  <div class="col-xs-1"></div>
  <div class="col-xs-10">

  <table class="table table-condensed width center">
  	<tr>
    	<td width="400px">
			<div class="panel panel-default" align="center">
			<div class="panel-body">
            	<table class="table table-condensed center" style="width:450px;">
                	<tr>
                    	<td colspan="3"><h4>공지 / 업데이트</h4></td>
                    </tr>
                	<tr style="background-color:#E8E8E8">
                    	<td>번호</td>
                        <td>공지내용</td>
                        <td>날짜</td>
                    </tr>
					<?
                    $result = $mysqli->query("SELECT * FROM notice order by no DESC Limit 5");
                
                    while ( $notices = $result->fetch_array() )
                    {
						$notices['subject'];
						$notices['no'];
					?>
						<tr>
                    		<td><?=$notices['no']?></td>
						    <td><a href="#" onClick="window.open('./notice_read.php?notice_no=<?=$notices['no']?>','new','resizable=no,scrollbars=no,width=970,height=350');return false;"><?=$notices['subject']?></a></td>
								<td><?=$notices['today']?></td>
							  </tr>
					<? } ?>
                 </table>
			</div>
			</div>
		</td>
        <td width="400px">
			<div class="panel panel-default">
			<div class="panel-body"><h4>에스트렐라 세계로 출발!</h4><br />
			<Form role="form">
                <div class="form-group">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">메일계정</span>
                        <input type="text" class="form-control" placeholder="Enter E-mail" id="email">
                    </div><br />
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">비밀번호</span>
                        <input type="password" class="form-control" placeholder="Password" id="password">
                    </div>
                    <br />
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" onclick="location.href='./join_member.php';">회원가입</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" id="login">로그인</button>
                        </div>
                    </div>
                </div>
            </Form>
			</div>
			</div>
		</td>
     </tr>
	</table>
	</div>

  <div class="col-xs-1"></div>
</div>    
    
<?
	include_once "./common/footer.php";
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>