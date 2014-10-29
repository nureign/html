
$(document).ready(function(){

	

});

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