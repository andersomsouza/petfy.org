$(document).ready(function () {
	$('.tipoc').click(function () {
		if(!$('.tipoc').hasClass('selected')) {
			$('.tipoc').addClass('selected');
			$('.tipog').removeClass('selected');
		} 
	});
	$('.tipog').click(function () {
		if(!$('.tipog').hasClass('selected')) {
			$('.tipog').addClass('selected');
			$('.tipoc').removeClass('selected');
		} 
	});
	$('.tipoh').click(function () {
		if(!$('.tipoh').hasClass('selected')) {
			$('.tipoh').addClass('selected');
			$('.tipom').removeClass('selected');
		} 
	});
	$('.tipom').click(function () {
		if(!$('.tipom').hasClass('selected')) {
			$('.tipom').addClass('selected');
			$('.tipoh').removeClass('selected');
		} 
	});
	$('.tipoP').click(function () {
		if(!$('.tipoP').hasClass('selected')) {
			$('.tipoP').addClass('selected');
			$('.tipoM').removeClass('selected');
			$('.tipoG').removeClass('selected');
		} 
	});
	$('.tipoM').click(function () {
		if(!$('.tipoM').hasClass('selected')) {
			$('.tipoM').addClass('selected');
			$('.tipoP').removeClass('selected');
			$('.tipoG').removeClass('selected');
		} 
	});
	$('.tipoG').click(function () {
		if(!$('.tipoG').hasClass('selected')) {
			$('.tipoG').addClass('selected');
			$('.tipoM').removeClass('selected');
			$('.tipoP').removeClass('selected');
		} 
	});

	/*Range Button*/
	$('.range').change(function() {
		$('.show').text($('.range').val());
		
	}); 
});