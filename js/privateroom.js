
$(document).ready(function(){
	GetPartsList();
});

$('#changeintro').click(function() {

	var intro = $('#intro');

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/privateroom_changeintro.php',
		data: {
			id: sessionStorage.getItem('id'),
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

	GetPartsList();

});

$('#changeitem').click(function(){

	//alert( $('#partslist').val() ); 아수라의 검
	
	SetParts( $('#partslist').val() );
});

function GetPartsList()
{
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/privateroom_getpartslist.php',
		data: {
			id: sessionStorage.getItem('id'),
			parts: GetPartsName()
		},
		success: function(data) {
			
			if( data == 'null' )
				return;
			
			$('#partslist').empty();
			
			var parsed = JSON.parse(data);

			for(var i=0; i<parsed.length; i++)
			{
				var temp = '<option>' + parsed[0][i]['name'] + '</option>';
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