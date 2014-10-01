
function AgreeCheck()
{
	if( !$('#agree1').is(':checked') || !$('#agree2').is(':checked') )
	{
		alert('모든 약관에 동의해주시기 바랍니다.');
		return;
	}

	location.href = './join_member2.php';
	return;
}

function SendAuthMail()
{
	var email = $('#inputEmail1');
	
	if( !IsValidEmail(email.val()) )
	{
		alert('이메일 형식이 올바르지 않습니다.');
		return;
	}

	$.ajax({
		cache: false,
		type: 'POST',
		url: './auth_member.php',
		data: {
			email: email.val()
		}
	});

	alert('인증번호가 전송되었습니다. 이메일을 확인해주시기 바랍니다.');

}

$('#AuthConfirm').click( function() {
	
	var email = $('#inputEmail1');
	var code = $('#inputCode1');

	if( !IsValidEmail(email.val()) )
	{
		alert('이메일 형식이 올바르지 않습니다.');
		return;
	}

	$.ajax({
		cache: false,
		type: 'POST',
		url: './auth_member2.php',
		data: {
			email: email.val()
		},
		success: function(data) {
			if( data == hex_md5(code.val()) )
			{
				alert('인증이 완료되었습니다.');
				email.prop('disabled', true);
				code.prop('disabled', true);
			}
			else
				alert('인증이 불일치 합니다.');
		}
	});

});

$('#join').click( function() {

	var email = $('#inputEmail1');
	var password1 = $('#inputPassword1');
	var password2 = $('#inputPassword2');
	var name = $('#username');
	
	if( password1.val().length < 8 )
	{
		alert('비밀번호를 8자리 이상으로 설정해 주시기 바랍니다.');
		return;
	}
	
	if( password1.val().search(/[0-9]/g) < 0 || password1.val().search(/[a-z]/ig) < 0 )
	{
		alert('비밀번호에 영문과 숫자를 포함해야 합니다.');
		return;
	}

	if( password1.val() != password2.val() )
	{
		alert('비밀번호가 일치하지 않습니다.');
		return;
	}

	$.ajax({
		cache: false,
		type: 'POST',
		url: './auth_member2.php',
		data: {
			email: email.val(),
			password: password1.val(),
			name: name.val()
		},
		success: function(data) {
			alert('가입이 완료되었습니다!');
			location.href = './join_member3.php';
		}
	});

});

// stock function
function IsValidEmail( val )
{
	var check_email = val.search(/^\s*[\w\~\-\.]+\@[\w\~\-]+(\.[\w\~\-]+)+\s*$/g);

	if( check_email != 0 )
		return false;

	return true;
}