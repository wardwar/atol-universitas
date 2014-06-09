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

