
$(document).ready(function(){

	$('#account_no').append('#'+sessionStorage.getItem('id'));
	$('#account_email').append(sessionStorage.getItem('email'));
	$('#account_name').append(sessionStorage.getItem('name'));
	$('#account_joindate').append(sessionStorage.getItem('joindate'));
	
	sessionStorage.removeItem('id');
	sessionStorage.removeItem('email');
	sessionStorage.removeItem('name');
	sessionStorage.removeItem('joindate');
	sessionStorage.removeItem('JoinProgress');
});