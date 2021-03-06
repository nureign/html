
//var socket = io('http://nureign.ddns.co.kr:8989');

$(document).ready(function(){
	
	if( sessionStorage.getItem('refresh') )
	{
		sessionStorage.removeItem('refresh');
		location.href = './main.php';
		return;
	}

	sessionStorage.setItem('refresh', '1');

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/adventure_getmonster.php',
		data: {
			id: sessionStorage.getItem('id')
		},
		success: function(data) {
			InitialSetup(data);
		}
	});

});

$('#skip').click(function() {

	

});

/*socket.on( 'UpdateStatus', function(data) {

	UpdateStatus(data);

});

socket.on( 'PlaySound', function(data) {

	PlaySound(data);

});*/

function InitialSetup(data)
{
	var parsed = JSON.parse(data);

	var p_name = parsed['p_name'];
	var p_hp = parseInt(parsed['p_hp']);
	var p_maxhp = parseInt(parsed['p_maxhp']);
	var p_mental = parseInt(parsed['p_mental']);
	var p_stat1 = parseInt(parsed['p_stat1']);
	var p_stat2 = parseInt(parsed['p_stat2']);
	var p_stat3 = parseInt(parsed['p_stat3']);
	var p_stat4 = parseInt(parsed['p_stat4']);
	var p_stat5 = parseInt(parsed['p_stat5']);
	var p_stat6 = parseInt(parsed['p_stat6']);

	var p_PerHP = Math.floor(p_hp / p_maxhp * 100);
	var p_PerMental = Math.floor(p_mental / p_mental * 100);

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

	$('#m_planet').text("행성: " + m_planet);
	$('#m_location').text("위치: " + m_location);
	
	$('#p_hp_text').text(p_hp + ' / ' + p_maxhp);
	$('#p_hp_per').text(p_PerHP + '%');
	$('#p_hp_per').attr('style', 'width: ' + p_PerHP + '%;');
	$('#p_mental_text').text(p_mental + ' / ' + p_mental);
	$('#p_mental_per').text(p_PerMental + '%');
	$('#p_mental_per').attr('style', 'width: ' + p_PerMental + '%;');

	$('#m_image').attr('src', m_image);
	$('#m_image').attr('alt', m_name);
	$('#m_hp_text').text(m_hp + ' / ' + m_MaxHP);
	$('#m_hp_per').text(m_PerHP + '%');
	$('#m_hp_per').attr('style', 'width: ' + m_PerHP + '%;');
	$('#m_name').text("이름: " + m_name);
	$('#m_type').text("속성: " + m_type);
	$('#m_resource').text("자원형태: " + m_resource);

	$('#battlelog').append('<li class="list-group-item list-group-item-info">' + josa(p_name, '이') + ' ' + josa(m_name, '을') + ' 발견했습니다!' + '</li>');
	$('#battlelog').append('<li class="list-group-item">'+ josa(p_name, '은') + ' 가지고 있던 무기를 고쳐쥐고 크게 심호흡을 합니다.' +'</li>');

	var bid = parsed['bid'];
	var seq = 0;
	
	setTimeout(function(){ PlaySound(m_sound_start) }, 1000);
	setTimeout(function(){ 

		var bgm = PlaySound('./sounds/battleground.mp3');
		$('#battlelog').append('<li class="list-group-item list-group-item-info">전투에 돌입합니다!</li>');
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
					if( JSON.parse(data)['att_name'] != null )
						UpdateBattlelog(data);
					else
					{
						clearTimeout(timer);
						bgm.pause();
						console.log(data);
						if( JSON.parse(data)['p_hp'] == 0 )
						{
							PlaySound('./sounds/lose.mp3');
						}
						else
						{
							PlaySound('./sounds/victory.mp3');
						}
					}
				}
			});

		}, 3000);

	}, 7000);
}

function UpdateBattlelog(data)
{
	var parsed = JSON.parse(data);

	var att_name = parsed['att_name'];
	var def_name = parsed['def_name'];
	var def_maxhp = parseInt(parsed['def_maxhp']);
	var def_curhp = parseInt(parsed['def_curhp']);
	var dmg = parseInt(parsed['dmg']);
	var crit = parseInt(parsed['crit']);
	var snd = parsed['snd'];
	var msg = parsed['msg'];

	PlaySound(snd);
	$('#battlelog').empty();

	var item = '<li class="list-group-item';
	var temp = msg.split('/');
	for(var i=0; i<temp.length; i++)
	{
		var item = '<li class="list-group-item';
		switch( temp[i].substr(0, 1) )
		{
			case '2':	// info
				item += ' list-group-item-info';
				break;
			case '3':	// warn
				item += ' list-group-item-warning';
				break;
			case '4':	// danger
				item += ' list-group-item-danger';
				break;
		}
		item += '">';
		$('#battlelog').append(item + temp[i].slice(1) + '</li>');
	}

	$('#p_turn').removeAttr('style');
	$('#m_turn').removeAttr('style');
	
	if( $('#m_name').text() == '이름: ' + att_name )
	{
		$('#m_turn').attr('style', 'border-color: red; border-width: 3px;');

		if( dmg > 0 )
		{
			ShakeImg($('#p_image'), crit, 2);
			
			var per = Math.floor(def_curhp / def_maxhp * 100);
			$('#p_hp_text').text(def_curhp + ' / ' + def_maxhp);
			$('#p_hp_per').text(per + '%');
			$('#p_hp_per').attr('style', 'width: ' + per + '%;');
		}
	}
	else
	{
		$('#p_turn').attr('style', 'border-color: red; border-width: 3px;');

		if( dmg > 0 )
		{
			ShakeImg($('#m_image'), crit, 2);

			var per = Math.floor(def_curhp / def_maxhp * 100);
			$('#m_hp_text').text(def_curhp + ' / ' + def_maxhp);
			$('#m_hp_per').text(per + '%');
			$('#m_hp_per').attr('style', 'width: ' + per + '%;');
		}
	}
}

function PlaySound(file)
{
	var audio = new Audio();
	audio.src = file;
	audio.play();
	return audio;
}

function ShakeImg(img, crit, time)
{
	var amount = 3;

	if( crit > 0 )
		amount = 6;

	var timer = setInterval(function(){
		switch( Math.floor( Math.random()*4 ) )
		{
			case 0:
				img.attr('style', 'position: relative; top: ' + amount + 'px;');
				break;
			case 1:
				img.attr('style', 'position: relative; left: ' + amount + 'px;');
				break;
			case 2:
				img.attr('style', 'position: relative; top: -' + amount + 'px;');
				break;
			case 3:
				img.attr('style', 'position: relative; left: -' + amount + 'px;');
				break;
		}
	}, 10);
	setTimeout(function(){
		clearTimeout(timer);
		img.removeAttr('style');
	}, time*1000);
}