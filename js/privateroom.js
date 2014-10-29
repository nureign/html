
$(document).ready(function(){
	//GetPartsList();
});

$('#changeintro').click(function() {

	var intro = $('#intro');

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/privateroom_changeintro.php',
		data: {
			intro: intro.val()
		},
		success: function(data) {
			if( data == 'success' )
			{
				alert('변경 성공');
			}
		}
	});

});

$('#parts').change(function(){

	$('#partslist').empty();
	$('#partslist').append('<option>데이터를 불러오는 중...</option>');
	GetPartsList();

});

$('#changeitem').click(function(){

	//alert( $('#partslist').val() ); 아수라의 검
	if( $('#partslist').val() == '데이터를 불러오는 중...' )
		return;

	SetParts( $('#partslist').val() );
});

function GetPartsList()
{
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/privateroom_getpartslist.php',
		data: {
			parts: GetPartsName()
		},
		success: function(data) {
			
			if( data == 'null' )
				return;
			
			$('#partslist').empty();
			
			var parsed = JSON.parse(data);

			for(var i=0; i<parsed.length; i++)
			{
				var temp = '<option>' + parsed[i] + '</option>';
				$('#partslist').append(temp);
			}
		}
	});
}

function SetParts(itemname)
{
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/privateroom_setparts.php',
		data: {
			id: sessionStorage.getItem('id'),
			parts: GetPartsName(),
			name: itemname
		},
		success: function(data) {
			
			if( data != 'null' )
			{
				console.log(data);
				alert('아이템을 장착하였습니다!');
				$('#lefthand').empty();
				$('#righthand').empty();
				$('#top').empty();
				$('#pants').empty();
				$('#shoes').empty();
				$('#accessory').empty();
				
				var parsed = JSON.parse(data);
				
				if( parsed['lefthand'] != null )
					$('#lefthand').text( parsed['lefthand'] );

				if( parsed['righthand'] != null )
					$('#righthand').text( parsed['righthand'] );

				if( parsed['top'] != null )
					$('#top').text( parsed['top'] );

				if( parsed['pants'] != null )
					$('#pants').text( parsed['pants'] );

				if( parsed['shoes'] != null )
					$('#shoes').text( parsed['shoes'] );

				if( parsed['accessory'] != null )
					$('#accessory').text( parsed['accessory'] );
			}

		}
	});
}

function GetPartsName()
{
	switch( $('#parts').val() )
	{
		case '왼손':
			return 'lefthand';
		case '오른손':
			return 'righthand';
		case '상의':
			return 'top';
		case '하의':
			return 'pants';
		case '신발':
			return 'shoes';
		case '악세사리':
			return 'accessory';

	}
}
