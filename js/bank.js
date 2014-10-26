
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
			alert(data + '루비 입금 성공!');

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

			if( data == 'not enough ruby' )
			{
				alert('은행에 루비가 부족합니다.');
				return;
			}
			
			RefreshWithdraw();
			alert(data + '루비 출금 성공!');
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
			
			$('#ruby').empty();
			$('#bank').empty();
			$('#depositlist').empty();
			$('#depositlist_top5').empty();

			var parsed = JSON.parse(data);
			
			$('#ruby').text(parsed.mine[0]['ruby']);
			$('#bank').text(parsed.mine[0]['bank']);

			for(var i=0; i<parsed.deposit.length; i++)
			{
				var date = parsed.deposit[i]['date'];
				var amount = parseInt(parsed.deposit[i]['amount']);
				
				if( i != 0 ) $('#depositlist').append('<br>');
				$('#depositlist').append('[' + date + ']' + ' ' + amount + ' 루비 입금');
			}
			
			var tag = '<tr><td colspan="4" class="danger">루비 부자 상위 5명</td></tr>';
			$('#depositlist_top5').append(tag);

			for(var i=0; i<parsed.deposit_top5.length; i++)
			{
				var name = parsed.deposit_top5[i]['name'];
				var intro = parsed.deposit_top5[i]['intro'];
				var bank = parseInt(parsed.deposit_top5[i]['bank']);

				var tds = '<tr><td>' + ( (i==0) ? '<span class="glyphicon glyphicon-thumbs-up"></span>' : parseInt(i+1)+'위' ) + '</td><td>'+name+'</td><td>'+intro+'</td><td>'+bank+'</td></tr>';
				$('#depositlist_top5').append(tds);
			}
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

			$('#ruby').empty();
			$('#bank').empty();
			$('#withdrawlist').empty();
			$('#withdrawlist_top5').empty();

			var parsed = JSON.parse(data);
			
			$('#ruby').text(parsed.mine[0]['ruby']);
			$('#bank').text(parsed.mine[0]['bank']);

			for(var i=0; i<parsed.withdraw.length; i++)
			{
				var date = parsed.withdraw[i]['date'];
				var amount = parseInt(parsed.withdraw[i]['amount']);
				var type = parsed.withdraw[i]['type'];
				var tax = parseInt(parsed.withdraw[i]['tax']);

				if( i != 0 ) $('#withdrawlist').append('<br>');
				$('#withdrawlist').append('[' + date + ']' + ' ' + amount + ' 루비 출금' + ((type=='전산오류') ? ' <b>전산오류</b>' : '') + ' (세금: ' + tax + ' 루비)' );
			}

			var tag = '<tr><td colspan="4" class="warning">전산오류 베스트 5명</td></tr>';
			$('#withdrawlist_top5').append(tag);

			for(var i=0; i<parsed.withdraw_top5.length; i++)
			{
				var name = parsed.withdraw_top5[i]['name'];
				var intro = parsed.withdraw_top5[i]['intro'];

				var tds = '<tr><td>' + ( (i==0) ? '<span class="glyphicon glyphicon-thumbs-up"></span>' : parseInt(i+1)+'위' ) + '</td><td>'+name+'</td><td>'+intro+'</td><td>1</td></tr>';
				$('#withdrawlist_top5').append(tds);
			}
		}
	});
}