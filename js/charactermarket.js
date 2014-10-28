
$(document).ready(function(){
	
});

$('.buy').click(function(){

	var buy = $(this);

	$.ajax({
		cache: false,
		type: 'POST',
		url: './logic/charactermarket_buyitem.php',
		data: {
			item: buy.val()
		},
		success: function(data) {
			
			if( data == 'not enough ruby' )
			{
				alert('소지하고 있는 루비가 부족합니다.');
				return;
			}

			if( data == 'already have item' )
			{
				alert('이미 해당 아이템을 가지고 있습니다.');
				return;
			}

			alert('아이템이 성공적으로 구매되었습니다.\n자세한 내용은 인벤토리에서 확인하세요!');

		}
	});

});