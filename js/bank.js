
$(document).ready(function(){


});

$('#deposit').click(function() {

	var amount = $('#rubyin');

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/bank_rubyin.php',
		data: {
			id: sessionStorage.getItem('id'),
			amount: amount.val()
		},
		success: function(data) {

			if( data == 'not enough ruby' )
			{
				alert('루비가 부족합니다.');
				return;
			}
			
			RefreshDeposit();
			alert('입금 성공');

		}
	});

});

$('#withdraw').click(function() {

	var amount = $('#rubyout');

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/bank_rubyout.php',
		data: {
			id: sessionStorage.getItem('id'),
			amount: amount.val()
		},
		success: function(data) {

			/*if( data == 'not enough ruby' )
			{
				alert('루비가 부족합니다.');
				return;
			}
			
			RefreshDeposit();
			alert('입금 성공');
*/
		}
	});

});

function RefreshDeposit()
{
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/bank_refreshdeposit.php',
		data: {
			id: sessionStorage.getItem('id')
		},
		success: function(data) {
			
			$('#depositlist').empty();

			var parsed = JSON.parse(data);
			//console.log(parsed.length);
			for(var i=0; i<parsed.length; i++)
			{
				var date = parsed[i]['date'];
				var amount = parseInt(parsed[i]['amount']);
				
				if( i != 0 ) $('#depositlist').append('<br>');
				$('#depositlist').append('[' + date + ']' + ' ' + amount + ' 루비 입금');
			}
			/*
			var date = parsed['date'];
			var amount = parseInt(parsed['amount']);

			for (var i=0; i<parsed.length; i++)
			{
				$('#depositlist').append('[' + date + ']' + ' ' + amount + ' 루비입금');
				$('#depositlist').append('<br>');
			}
*/
		}
	});
}

function RefreshWithdraw()
{
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/bank_refreshwithdraw.php',
		data: {
			id: sessionStorage.getItem('id')
		},
		success: function(data) {

			

		}
	});
}