
$(document).ready(function(){

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/statusroll.php',
		success: function(data) {
			insertStatus(JSON.parse(data));
		}
	});

});

$('#statusroll').click(function(){

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/statusroll.php',
		success: function(data) {
			insertStatus(JSON.parse(data));
		}
	});

});

function insertStatus(data)
{
	$('#stat1').empty();
	$('#stat2').empty();
	$('#stat3').empty();
	$('#stat4').empty();
	$('#stat5').empty();
	$('#stat6').empty();

	$('#stat1').append(data[0]);
	$('#stat2').append(data[1]);
	$('#stat3').append(data[2]);
	$('#stat4').append(data[3]);
	$('#stat5').append(data[4]);
	$('#stat6').append(data[5]);
}