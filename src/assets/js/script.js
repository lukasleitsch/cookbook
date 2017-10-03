$(function () {
  $('form input[type="search"]').focus()

  $('.search-button').click(function () {
    $('.rezept form').fadeIn('fast')
    $('form input[type="search"]').focus()
    $(this).hide()
  })

  $('.js-calc').click(function() {
    var $zutaten = $('.js-zutaten');
    $zutaten.html($zutaten.html().replace(/(\d+)([^>])/g, function(match, number, append){
      return number * parseInt($('.js-factor').val()) + append;
    }));
  });
})
