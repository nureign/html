
var socket = io('http://nureign.ddns.co.kr:8989');

$(document).ready(function(){

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/adventure_getmonster.php',
		data: {
			id: sessionStorage.getItem('id')
		},
		success: function(data) {
			InitialSetup(data);
			
			var parsed = JSON.parse(data);
			var bid = parsed['bid'];
			var seq = 0;
			
			var timer = setInterval(function() {
				
				$.ajax({
					cache: false,
					type: 'POST',
					url: './logic/adventure_getbattlelog.php',
					data: {
						bid: bid,
						seq: seq++
					},
					success: function(data) {
						UpdateBattlelog(data);
					}
				});

				if( seq >= 20 )
					clearTimeout(timer);

			}, 3000);
		}
	});
});

socket.on( 'UpdateStatus', function(data) {

	UpdateStatus(data);

});

socket.on( 'PlaySound', function(data) {

	PlaySound(data);

});

function InitialSetup(data)
{
	var parsed = JSON.parse(data);

	var p_hp = parseInt(parsed['p_hp']);
	var p_mental = parseInt(parsed['p_mental']);
	var p_stat1 = parseInt(parsed['p_stat1']);
	var p_stat2 = parseInt(parsed['p_stat2']);
	var p_stat3 = parseInt(parsed['p_stat3']);
	var p_stat4 = parseInt(parsed['p_stat4']);
	var p_stat5 = parseInt(parsed['p_stat5']);
	var p_stat6 = parseInt(parsed['p_stat6']);

	var p_MaxHP = p_hp;
	var p_PerHP = p_MaxHP / p_MaxHP * 100;
	var p_GraphHP = p_PerHP;
	if( p_GraphHP < 25 ) p_GraphHP = 25;

	var p_MaxMental = p_mental;
	var p_PerMental = p_MaxMental / p_MaxMental * 100;
	var p_GraphMental = p_PerMental;
	if( p_GraphMental < 25 ) p_GraphMental = 25;

	var m_name = parsed['m_name'];
	var m_image = parsed['m_image'];
	var m_sound_start = parsed['m_sound_start'];
	var m_level = parseInt(parsed['m_level']);
	var m_planet = parsed['m_planet'];
	var m_location = parsed['m_location'];
	var m_hp = parseInt(parsed['m_hp']);
	var m_type = parsed['m_type'];
	var m_resource = parsed['m_resource'];

	var m_MaxHP = m_hp;
	var m_PerHP = m_MaxHP / m_MaxHP * 100;
	var m_GraphHP = m_PerHP;
	if( m_GraphHP < 25 ) m_GraphHP = 25;
	
	$('#m_planet').text("행성: " + m_planet);
	$('#m_location').text("위치: " + m_location);
	
	$('#p_hp_text').text(p_hp + ' / ' + p_MaxHP);
	$('#p_hp_per').text(p_PerHP + '%');
	$('#p_hp_per').attr('style', 'width: ' + p_GraphHP + '%;');
	$('#p_mental_text').text(p_mental + ' / ' + p_MaxMental);
	$('#p_mental_per').text(p_PerMental + '%');
	$('#p_mental_per').attr('style', 'width: ' + p_GraphMental + '%;');
	
	PlaySound(m_sound_start);
	console.log(m_sound_start);
	$('#m_image').attr('src', m_image);
	$('#m_image').attr('alt', m_name);
	$('#m_hp_text').text(m_hp + ' / ' + m_MaxHP);
	$('#m_hp_per').text(m_PerHP + '%');
	$('#m_hp_per').attr('style', 'width: ' + m_GraphHP + '%;');
	$('#m_name').text("이름: " + m_name);
	$('#m_type').text("속성: " + m_type);
	$('#m_resource').text("자원형태: " + m_resource);
}

function UpdateBattlelog(data)
{
	console.log(data);
	var parsed = JSON.parse(data);

	var sound = parsed['sound'];
	var message = parsed['message'];
	var message_type = parsed['message_type'];

	PlaySound(sound);

	var item = '<li class="list-group-item';
	switch( message_type )
	{
		case 'warning':
			item += ' list-group-item-warning';
			break;
	}
	item += '">';

	$('#battlelog').prepend(item + message + '</li>');
}

function PlaySound(file)
{
	var audio = new Audio();
	audio.src = file;
	audio.play();
}