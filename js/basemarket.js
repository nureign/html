
$(document).ready(function(){
	/*
	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/basemarket_getstatus.php',
		data: {
			id: sessionStorage.getItem('id')
		},
		success: function(data) {
			UpdateStatus(data);
		}
	});*/
	UpdateStatus();
});

function UpdateStatus(data)
{
	//var parsed = JSON.parse(data);
	var name = '모에모에';//parsed['name'];
	var salesrate = 5;//parseInt(parsed['salesrate'];

	$('#name').text(name);
	$('#salesrate').text(salesrate);
}