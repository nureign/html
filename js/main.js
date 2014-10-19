
//var socket = io('http://nureign.ddns.co.kr:8989');

$(document).ready(function(){

	RefreshStatus();

});

$('#adventure').click(function() {

	location.href = './adventure.php';

});

$('#planetattack').click(function() {

	location.href = './planetattack.php';

});

$('#charactermarket').click(function() {

	myRedirect('./charactermarket.php', 'id', sessionStorage.getItem('id'));

});

$('#grocerymarket').click(function() {

	myRedirect('./grocerymarket.php', 'id', sessionStorage.getItem('id'));

});

$('#basemarket').click(function() {

	myRedirect('./basemarket.php', 'id', sessionStorage.getItem('id'));

});

$('#privateroom').click(function() {

	myRedirect('./privateroom.php', 'id', sessionStorage.getItem('id'));

});

/*socket.on( 'UpdateStatus', function(data) {

	UpdateStatus(data);

});*/

function RefreshStatus()
{
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/main_getstatus.php',
		data: {
			id: sessionStorage.getItem('id')
		},
		success: function(data) {
			UpdateStatus(data);
			setTimeout(function(){RefreshStatus();}, 5000);
		}
	});
}

function UpdateStatus(data)
{
	var parsed = JSON.parse(data);
	
	var name = parsed['name'];
	var classn = parsed['class'];
	var level = parseInt(parsed['level']);
	var	tendency = parsed['tendency'];
	var hp = parseInt(parsed['hp']);
	var maxhp = parseInt(parsed['maxhp']);
	var mental = parseInt(parsed['mental']);
	var exp = parseInt(parsed['exp']);
	var stat1 = parseInt(parsed['stat1']);
	var stat2 = parseInt(parsed['stat2']);
	var stat3 = parseInt(parsed['stat3']);
	var stat4 = parseInt(parsed['stat4']);
	var stat5 = parseInt(parsed['stat5']);
	var stat6 = parseInt(parsed['stat6']);
	var honor = parseInt(parsed['honor']);
	var ruby = parseInt(parsed['ruby']);
	var lefthand = parsed['lefthand'];
	var righthand = parsed['righthand'];
	var top = parsed['top'];
	var pants = parsed['pants'];
	var shoes = parsed['shoes'];
	var accessory = parsed['accessory'];
	var intro = parsed['intro'];

	// 공식 (체력)
	var CurLevel = level;
	var CurHP = hp;
	var CurMental = mental;
	var CurEXP = exp;

	var NextLevel = CurLevel + 1;

	var PerHP = Math.floor(hp / maxhp * 100);

	var MaxMental = CurLevel * 100;
	var PerMental = Math.floor(CurMental / MaxMental * 100);

	var NextEXP = Math.floor( Math.pow((NextLevel-1), 2) * ( Math.pow(NextLevel, 2) - (NextLevel * 13) + 82 ) );
	var PerEXP = Math.floor(CurEXP / NextEXP * 100);

	$('#name').text(name);
	$('#intro').text(intro);
	$('#level').text(classn + '(Lv.'+ level +')');
	$('#hp_text').text(hp + ' / ' + maxhp);
	$('#hp_per').text(PerHP + '%');
	$('#hp_per').attr('style', 'width: ' + PerHP + '%;');
	$('#mental_text').text(mental + ' / ' + MaxMental);
	$('#mental_per').text(PerMental + '%');
	$('#mental_per').attr('style', 'width: ' + PerMental + '%;');
	$('#exp_text').text(exp + ' / ' + NextEXP);
	$('#exp_per').text(PerEXP + '%');
	$('#exp_per').attr('style', 'width: ' + PerEXP + '%;');
	$('#tendency').text(tendency);
	$('#stat1').text(stat1);
	$('#stat2').text(stat2);
	$('#stat3').text(stat3);
	$('#stat4').text(stat4);
	$('#stat5').text(stat5);
	$('#stat6').text(stat6);
	$('#honor').text(honor);
	$('#ruby').text(ruby);
	$('#lefthand').text(lefthand);
	$('#righthand').text(righthand);
	$('#top').text(top);
	$('#pants').text(pants);
	$('#shoes').text(shoes);
	$('#accessory').text(accessory);
}