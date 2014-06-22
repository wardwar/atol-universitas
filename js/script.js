$(document).ready(function() {

	$('form.login').on('submit', function() {

	 var that = $(this),
	 	 url = that.attr('action'),
	 	 type = that.attr('method'),
	 	 data  = {};

	 that.find('[name]').each(function(index, value) {
	 	var that = $(this),
	 		name = that.attr('name'),
	 		value = that.val();

	 	data[name] = value;
	 });

	 	$("#tombol").fadeOut(100);
	 	$("#loader").fadeIn(200);

	 	$.ajax({
	 		url: url,
	 		type:type,
	 		data: data,
	 		success: function(result) {
	 				$('#loader').delay(900).hide(0);

	 			setTimeout(function() {
	 				if(result =='success'){
	 				window.location='http://localhost/github/atol-universitas/admin';
               }else{
                     $("#error").fadeIn(200).html(result);
                     $("#tombol").fadeIn(100);
               }
           },1000);


	 		}
	 	});

	 	return false;


	});

      $('#loader').hide();
      $('#error').hide();


});

$(document).ready(function() {

	$('form.slide').on('submit', function() {

	 var that = $(this),
	 	 url = that.attr('action'),
	 	 type = that.attr('method'),
	 	 data  = {};

	 that.find('[name]').each(function(index, value) {
	 	var that = $(this),
	 		name = that.attr('name'),
	 		value = that.val();

	 	data[name] = value;
	 });

	 	$.ajax({
	 		url: url,
	 		type:type,
	 		data: data,

	 		success: function(result) {

	 			setTimeout(function() {
	 				if(result =='success'){
	 				result.log('wi');
               }else{
                     $("#error-reguler").fadeIn(200).html(result);
               }
           },1000);


	 		}
	 	});

	 	return false;


	});

	$('#error-reguler').hide();

});



// Activates the Carousel
$('.carousel').carousel({
  interval: 5000
});

// Activates Tooltips for Social Links
$('.tooltip-social').tooltip({
  selector: "a[data-toggle=tooltip]"
});

// scroling nav
//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 200) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".brand").removeClass("main-nav-brand-big");
        $(".brand").addClass("main-nav-brand-small");
    } else {
        $(".brand").addClass("main-nav-brand-big");
        $(".brand").removeClass("main-nav-brand-small");
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
// end

// show button tambah
$(document).ready(function() {

  $(".tambah").hide();

  $(".btn").click(function(){
    $(".tambah").fadeIn();

  });


});

