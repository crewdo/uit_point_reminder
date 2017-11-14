/*global jQuery:false */
(function ($) {


	$(window).load(function(){
      $("#navigation").sticky({ topSpacing: 0 });
    });
	


	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});	

	
	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});
	
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			var nav = $($anchor.attr('href'));
			if (nav.length) {
			$('html, body').stop().animate({				
				scrollTop: $($anchor.attr('href')).offset().top				
			}, 1500, 'easeInOutExpo');
			
			event.preventDefault();
			}
		});
		$('a.totop,a#btn-scroll,a.btn-scroll,.carousel-inner .item a.btn').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

	//nivo lightbox
	$('.gallery-item a').nivoLightbox({
		effect: 'fadeScale',                             // The effect to use when showing the lightbox
		theme: 'default',                           // The lightbox theme to use
		keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
		clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
		onInit: function(){},                       // Callback when lightbox has loaded
		beforeShowLightbox: function(){},           // Callback before the lightbox is shown
		afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
		beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
		afterHideLightbox: function(){},            // Callback after the lightbox is hidden
		onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
		onNext: function(element){},                // Callback when the lightbox gallery goes to next item
		errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
	});

	jQuery('.appear').appear();
	jQuery(".appear").on("appear", function(data) {
			var id = $(this).attr("id");
			jQuery('.nav li').removeClass('active');
			jQuery(".nav a[href='#" + id + "']").parent().addClass("active");					
		});
	
})(jQuery);

		jQuery(document).ready(function() {
			$('input:radio[name="radio"]').change(
    	function(){
        if ($(this).is(':checked') && $(this).val() == '2') {
            $('.extra').show();
            $('#email_textbox').attr('required', 'required');
        }
        else{
        	 $('.extra').hide();
        	 $('#email_textbox').removeAttr('required');
        	 $('#email_textbox').val('');
        }
    });

		
		 function validateEmail($email) {
 		 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 		 return emailReg.test( $email );
	}
		jQuery(document).on('click', '#btnSubmit', function(){
		var mssv = $('#mssv').val();
		var password = $('#password').val();
		var other_mail = $('#email_textbox').val();

		if(!validateEmail(other_mail)){

			$('#modal-email').modal('show');
			return 0;

		}
		$('#modal-wait').modal('show');
		
		$.ajax({
			url: 'ajax/authenticate',
			type: 'POST',
			data: {mssv: mssv, password: password, mail: other_mail},
			success: function(data){
				if(data == 1){
					$('#modal-wait').modal('hide');
					$('#modal-success').modal('show');
				}
				else{
					$('#modal-wait').modal('hide');
					$('#modal-fail').modal('show');
				}
			}
		});
		
		
		//do Ajax
		});





			jQuery(document).on('click', '#btnReupdatePassword', function(){
		var mssv = $('#mssv').val();
		var password = $('#password').val();
		var mail = $('#student_email').val();

		$('#modal-wait').modal('show');
		
		$.ajax({
			url: 'reupdate-password/ajax/authenticate',
			type: 'POST',
			data: {mssv: mssv, password: password, mail: mail},
			success: function(data){
				if(data == 1){
					$('#modal-wait').modal('hide');
					$('#modal-success').modal('show');
				}
				else{
					$('#modal-wait').modal('hide');
					$('#modal-fail').modal('show');
				}
			}
		});
		
		
		//do Ajax
		});



		});
