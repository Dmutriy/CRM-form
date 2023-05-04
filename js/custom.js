$(document).ready(function () {

  // Плавная прокрутка
  $(document).ready(function() {
    $('.sm-scroll').on('click', function(){
      var el = $(this).attr('href');
      el = el.replace(/[^\#]*/, '');
      $('body,html').animate({
      scrollTop: $(el).offset().top}, 1000);
      return false;
    });
  });

  // Popup
  $('.js--popup').on('click', function (e) {
    e.preventDefault();
    let btn = $(this).data('modal');
    $('#' + btn).addClass('active');
    $('.popup-overlay').show();
    $('body').toggleClass('noscroll');
  })
  $('.close-popup, .popup-overlay, .close-popup-btn').on('click', function (e) {
    e.preventDefault();
    $('.popup-overlay').hide();
    $('.popup-window').removeClass('active');
    $('body').removeClass('noscroll');
  })

  // Timer
	$('#timer').countdown({
		date: '05/05/2030 23:59:59',
		offset: 3,
		day: 'Day',
		days: 'Days'
	}, function () {
	});

})