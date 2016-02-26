$(document).ready(function() {

$('body').on('click','.login',function(event){
		event.preventDefault();
		$('.comodale').show();
	});

$('body').on('click','.modenvoyer',function(event){
		event.preventDefault();
		$('.comodale').hide();
	});

$('body').on('click','.modfermer',function(event){
		event.preventDefault();
		$('.comodale').hide();
	});

})