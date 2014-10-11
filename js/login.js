
$('#email').keydown(function(e){

	if( e.keyCode == 13 )
		Login();

});

$('#password').keydown(function(e){

	if( e.keyCode == 13 )
		Login();

});

$('#login').click(function(){

	Login();

});


// stock function
function IsValidEmail( val )
{
	var check_email = val.search(/^\s*[\w\~\-\.]+\@[\w\~\-]+(\.[\w\~\-]+)+\s*$/g);

	if( check_email != 0 )
		return false;

	return true;
}

function Login()
{
	var email = $('#email');
	var password = $('#password');
	
	if( !IsValidEmail(email.val()) )
	{
		alert('로그인 실패');
		return;
	}

	if( password.val().length < 8 )
	{
		alert('로그인 실패');
		return;
	}
	
	if( password.val().search(/[0-9]/g) < 0 || password.val().search(/[a-z]/ig) < 0 )
	{
		alert('로그인 실패');
		return;
	}

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/logincheck.php',
		data: {
			email: email.val(),
			password: password.val()
		},
		success: function(data) {
		
			if( data == email.val() )
			{
				alert('로그인 성공');
			}
			else
			{
				alert('로그인에 실패했습니다.');
			}

		}
	});
}