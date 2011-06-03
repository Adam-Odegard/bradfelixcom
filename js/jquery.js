$(document).ready(function(){
	image = Array("/media/timtebow/tt_header1.jpg","/media/timtebow/tt_header3.jpg","/media/timtebow/tt_header2.jpg","/media/timtebow/tt_header4.jpg","/media/timtebow/tt_header5.jpg","/media/timtebow/tt_header6.jpg");
	
	$("#header").css('background','url(' + image[0] + ')');
	$("#header").fadeIn("slow");
	
	$("#earlyyears").click(function(event){
			event.preventDefault();
			$('#header').hide();
			$("#header").css('background','url(' + image[0] + ')');
			$("#header").fadeIn("slow");
			$("#tab1").fadeIn("slow");
		});

	$("#freshman").click(function(event){
			event.preventDefault();
			$('#header').hide();
			$("#header").css('background','url(' + image[1] + ')');
			$("#header").fadeIn("slow");
			$("#tab2").fadeIn("slow");

		});
	$("#sophomore").click(function(event){
			event.preventDefault();
			$('#header').hide();
			$("#header").css('background','url(' + image[2] + ')');
			$("#header").fadeIn("slow");
			$("#tab3").fadeIn("slow");

		});
	$("#junior").click(function(event){
			event.preventDefault();
			$('#header').hide();
			$("#header").css('background','url(' + image[3] + ')');
			$("#header").fadeIn("slow");
			$("#tab4").fadeIn("slow");

		});
	$("#senior").click(function(event){
			event.preventDefault();
			$('#header').hide();
			$("#header").css('background','url(' + image[4] + ')');
			$("#header").fadeIn("slow");
			$("#tab5").fadeIn("slow");
		});
	$("#farewell").click(function(event){
			event.preventDefault();
			$('#header').hide();
			$("#header").css('background','url(' + image[5] + ')');
			$("#header").fadeIn("slow");
			$("#tab6").fadeIn("slow");
		});
		
	});

