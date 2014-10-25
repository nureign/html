
$(document).ready(function(){


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
