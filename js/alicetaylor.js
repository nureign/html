
function josa(str, tail)
{
	strTemp = str.substr(str.length - 1);
	if(strTemp.charCodeAt(0) < 129)
	{
		pattern = /[lmnr]/i;
		
		if(pattern.test(strTemp))
			return str + tail.substr(0, 1);

		pattern = /([aeiou][^aeiouwy]e|mb)$/i;
		return pattern.test(str) ? str + tail.substr(0, 1) : str + tail.substr(1, 1);
	}

	return ((strTemp.charCodeAt(0) - 16) % 28 != 0) ? str + tail.substr(0, 1) : str + tail.substr(1, 1);
}

var myRedirect = function(redirectUrl, arg, value)
{
	var form = $('<form action="' + redirectUrl + '" method="post">' +
	'<input type="hidden" name="'+ arg +'" value="' + value + '"></input>' + '</form>');
	$('body').append(form);
	$(form).submit();
};