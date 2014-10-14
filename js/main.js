
$(document).ready(function(){

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/main_getstatus.php',
		data: {
			id: sessionStorage.getItem('id')
		},
		success: function(data) {
			UpdateStatus(data);
		}
	});

});

function UpdateStatus(data)
{
	var parsed = JSON.parse(data);
	
	// 공식 (체력)
	var CurLevel = parseInt(parsed['level']);
	var CurHP = parseInt(parsed['hp']);
	var CurMental = parseInt(parsed['mental']);
	var CurEXP = parseInt(parsed['exp']);

	var NextLevel = CurLevel + 1;

	var MaxHP = CurLevel * 1000;
	var PerHP = CurHP / MaxHP * 100;
	var GraphHP = PerHP;
	if( GraphHP < 25 ) GraphHP = 25;

	var MaxMental = CurLevel * 1000;
	var PerMental = CurMental / MaxMental * 100;
	var GraphMental = PerMental;
	if( GraphMental < 25 ) GraphMental = 25;

	var NextEXP = Math.floor( Math.pow((NextLevel-1), 2) * ( Math.pow(NextLevel, 2) - (NextLevel * 13) + 82 ) );
	var PerEXP = CurEXP / NextEXP * 100;
	var GraphEXP = PerEXP;
	if( GraphEXP < 25 ) GraphEXP = 25;

	$('#name').text(parsed['name']);
	$('#level').text('견습(Lv.'+CurLevel+')');
	$('#hp_text').text(CurHP + ' / ' + MaxHP);
	$('#hp_per').text(PerHP + '%');
	$('#hp_per').attr('style', 'width: ' + GraphHP + '%;');
	$('#mental_text').text(CurMental + ' / ' + MaxMental);
	$('#mental_per').text(PerMental + '%');
	$('#mental_per').attr('style', 'width: ' + GraphMental + '%;');
	$('#exp_text').text(CurEXP + ' / ' + NextEXP);
	$('#exp_per').text(PerEXP + '%');
	$('#exp_per').attr('style', 'width: ' + GraphEXP + '%;');
	$('#tendency').text(parsed['tendency']);
	$('#stat1').text(parsed['stat1']);
	$('#stat2').text(parsed['stat2']);
	$('#stat3').text(parsed['stat3']);
	$('#stat4').text(parsed['stat4']);
	$('#stat5').text(parsed['stat5']);
	$('#stat6').text(parsed['stat6']);
	$('#honor').text(parsed['honor']);
	$('#ruby').text(parsed['ruby']);
}