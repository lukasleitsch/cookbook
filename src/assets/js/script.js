$(function() {
  $("form input[type='search']").focus();

  $('.search-button').click(function() {
  	$('.rezept form').fadeIn('fast');
  	$("form input[type='search']").focus();
  	$(this).hide();
  });
});