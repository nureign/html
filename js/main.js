
//var socket = io('http://nureign.ddns.co.kr:8989');

$(document).ready(function(){

	RefreshStatus();
	sessionStorage.removeItem('refresh');

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
	
	var hp = parseInt(parsed['hp']);
	var maxhp = parseInt(parsed['maxhp']);
	var mental = parseInt(parsed['mental']);
	var hp_per = parseInt(parsed['hp_per']);
	var mental_per = parseInt(parsed['mental_per']);

	$('#hp_text').text(hp + ' / ' + maxhp);
	$('#hp_per').text(hp_per + '%');
	$('#hp_per').attr('style', 'width: ' + hp_per + '%;');
	$('#mental_text').text(mental + ' / ' + mental);
	$('#mental_per').text(mental_per + '%');
	$('#mental_per').attr('style', 'width: ' + mental_per + '%;');
}