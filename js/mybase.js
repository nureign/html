
$(document).ready(function(){

	UpToDate();

});

function UpToDate()
{
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/mybase_update.php',
		success: function(data) {
			
			console.log(data);

			if( data == 'null' )
				return;

			var parsed = JSON.parse(data);
			
			// 커맨드센터 부분
			$('#cc_level').text( parsed['cc_level'] );
			$('#cc_price').text( parsed['cc_price'] );
			$('#cc_hp').text( parsed['cc_hp'] );
			$('#ra_level').text( parsed['ra_level'] );
			$('#de_level').text( parsed['de_level'] );
			$('#do_level').text( parsed['do_level'] );
			
			// 레이더 부분
			if( parseInt(parsed['ra_req']) <= parseInt(parsed['cc_level']) )
			{
				$('#upgrade_ra').prop('disabled', false);
				$('#ra_warn').text('※ 다음 업그레이드에 필요한 자원은 ' + parsed['ra_price'] + ' 루비가 필요합니다.');
			}
			else
			{
				$('#upgrade_ra').prop('disabled', true);
				$('#ra_warn').text('※ 커맨드센터 레벨이 ' + parsed['ra_req'] + ' 이상 이어야 합니다.');
			}

			$('#ra_stat1').text( parsed['ra_stat'] + '%' );
			$('#ra_stat2').text( parsed['ra_stat'] + '%' );
			$('#ra_stat1_next').text( parsed['ra_stat_next'] );
			$('#ra_stat2_next').text( parsed['ra_stat_next'] );

			// 인사과 부분
			if( parseInt(parsed['de_req']) <= parseInt(parsed['cc_level']) )
			{
				$('#upgrade_de').prop('disabled', false);
				$('#de_warn').text('※ 다음 업그레이드에 필요한 자원은 ' + parsed['de_price'] + ' 루비가 필요합니다.');
			}
			else
			{
				$('#upgrade_de').prop('disabled', true);
				$('#de_warn').text('※ 커맨드센터 레벨이 ' + parsed['de_req'] + ' 이상 이어야 합니다.');
			}

			// 생활관 부분
			if( parseInt(parsed['do_req']) <= parseInt(parsed['cc_level']) )
			{
				$('#upgrade_do').prop('disabled', false);
				$('#do_warn').text('※ 다음 업그레이드에 필요한 자원은 ' + parsed['do_price'] + ' 루비가 필요합니다.');
			}
			else
			{
				$('#upgrade_do').prop('disabled', true);
				$('#do_warn').text('※ 커맨드센터 레벨이 ' + parsed['do_req'] + ' 이상 이어야 합니다.');
			}

			$('#do_stat').text( '0 / '+parsed['do_stat'] );
			$('#do_stat_next').text( parsed['do_stat_next'] );
		}
	});

}

$('#changedef').click(function(){

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/mybase_changedef.php',
		data: {
			def1: $('#changedef1').children(':selected').attr('id'),
			def2: $('#changedef2').children(':selected').attr('id'),
			def3: $('#changedef3').children(':selected').attr('id'),
			def4: $('#changedef4').children(':selected').attr('id')
		},
		success: function(data) {
			
			if( data != 'null' )
			{
				alert('기지방호시스템이 설정되었습니다!');
				console.log(data);
				var parsed = JSON.parse(data);
				
				if( parsed['def1'] != null )
					$('#def1').text( parsed['def1'] );
				else
					$('#def1').text( '무방비' );

				if( parsed['def2'] != null )
					$('#def2').text( parsed['def2'] );
				else
					$('#def2').text( '무방비' );

				if( parsed['def3'] != null )
					$('#def3').text( parsed['def3'] );
				else
					$('#def3').text( '무방비' );

				if( parsed['def4'] != null )
					$('#def4').text( parsed['def4'] );
				else
					$('#def4').text( '무방비' );
			}

		}
	});

});

$('#changedef1').change(function(){

	if( $(this).val() == '무방비' )
	{
		$('#changedef2').val('무방비');
		$('#changedef3').val('무방비');
		$('#changedef4').val('무방비');

		$('#changedef2').prop('disabled', true);
		$('#changedef3').prop('disabled', true);
		$('#changedef4').prop('disabled', true);

		return;
	}
	
	$('#changedef2').prop('disabled', false);

});

$('#changedef2').change(function(){

	if( $(this).val() == '무방비' )
	{
		$('#changedef3').val('무방비');
		$('#changedef4').val('무방비');

		$('#changedef3').prop('disabled', true);
		$('#changedef4').prop('disabled', true);
		
		return;
	}
	
	if( $(this).val() == $('#changedef1').val() )
	{
		alert('방어시스템1에 채택되어 있는 시스템입니다.');
		$('#changedef2').val('무방비');
		$('#changedef3').val('무방비');
		$('#changedef4').val('무방비');

		$('#changedef3').prop('disabled', true);
		$('#changedef4').prop('disabled', true);
		return;
	}

	$('#changedef3').prop('disabled', false);

});

$('#changedef3').change(function(){

	if( $(this).val() == '무방비' )
	{
		$('#changedef4').val('무방비');

		$('#changedef4').prop('disabled', true);

		return;
	}

	if( $(this).val() == $('#changedef1').val() )
	{
		alert('방어시스템1에 채택되어 있는 시스템입니다.');
		$('#changedef3').val('무방비');
		$('#changedef4').val('무방비');

		$('#changedef4').prop('disabled', true);
		return;
	}

	if( $(this).val() == $('#changedef2').val() )
	{
		alert('방어시스템2에 채택되어 있는 시스템입니다.');
		$('#changedef3').val('무방비');
		$('#changedef4').val('무방비');

		$('#changedef4').prop('disabled', true);
		return;
	}

	$('#changedef4').prop('disabled', false);

});

$('#changedef4').change(function(){

	if( $(this).val() == $('#changedef1').val() )
	{
		alert('방어시스템1에 채택되어 있는 시스템입니다.');
		$('#changedef4').val('무방비');
		return;
	}

	if( $(this).val() == $('#changedef2').val() )
	{
		alert('방어시스템2에 채택되어 있는 시스템입니다.');
		$('#changedef4').val('무방비');
		return;
	}

	if( $(this).val() == $('#changedef3').val() )
	{
		alert('방어시스템3에 채택되어 있는 시스템입니다.');
		$('#changedef4').val('무방비');
		return;
	}

});

$('#upgrade_cc').click(function(){

	if( confirm('커맨드센터를 업그레이드 하시겠습니까?') )
	{
		$.ajax({
			cache: false,
			type: 'POST',
			url: './logic/mybase_upgrade.php',
			data: {
				item: 'commandcenter'
			},
			success: function(data) {
				
				console.log(data);

				if( data == 'null' )
					return;

				if( data == 'not enough ruby' )
				{
					alert('루비가 부족합니다.');
					return;
				}

				alert('업그레이드가 완료되었습니다!');
				UpToDate();

			}
		});
	}

});

$('#upgrade_ra').click(function(){

	if( confirm('레이다 시설을 업그레이드 하시겠습니까?') )
	{
		$.ajax({
			cache: false,
			type: 'POST',
			url: './logic/mybase_upgrade.php',
			data: {
				item: 'rader'
			},
			success: function(data) {
				
				console.log(data);

				if( data == 'null' )
					return;

				if( data == 'not enough ruby' )
				{
					alert('루비가 부족합니다.');
					return;
				}

				alert('업그레이드가 완료되었습니다!');
				UpToDate();

			}
		});
	}

});

$('#upgrade_de').click(function(){

	if( confirm('인사과를 업그레이드 하시겠습니까?') )
	{
		$.ajax({
			cache: false,
			type: 'POST',
			url: './logic/mybase_upgrade.php',
			data: {
				item: 'department'
			},
			success: function(data) {
				
				console.log(data);

				if( data == 'null' )
					return;

				if( data == 'not enough ruby' )
				{
					alert('루비가 부족합니다.');
					return;
				}

				alert('업그레이드가 완료되었습니다!');
				UpToDate();

			}
		});
	}

});

$('#upgrade_do').click(function(){

	if( confirm('생활관을 업그레이드 하시겠습니까?') )
	{
		$.ajax({
			cache: false,
			type: 'POST',
			url: './logic/mybase_upgrade.php',
			data: {
				item: 'dorm'
			},
			success: function(data) {
				
				console.log(data);

				if( data == 'null' )
					return;

				if( data == 'not enough ruby' )
				{
					alert('루비가 부족합니다.');
					return;
				}

				alert('업그레이드가 완료되었습니다!');
				UpToDate();

			}
		});
	}

});