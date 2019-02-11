$(function() {
	$('.page-numbers').addClass('page-link');
	$('.page-numbers').wrap('<li class="page-item"></li>');
	$('.page-numbers.current').parent().addClass('active');

});