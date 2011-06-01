$(document).ready(function(){
var num;

$("#numoffiles").change(function(){
	num = $('#numoffiles').val();
	switch (num) {
	  case '':
	  	 $('.each_item').slideUp('fast');
	  break;
	  
	  case '1':
	  	 $('.each_item').slideUp('fast');
	     $('#hide1').slideDown('slow');
	  break;
	  
	  case '2':
	  	 $('.each_item').slideUp('fast');
	     $('#hide1').slideDown('slow');
	     $('#hide2').slideDown('slow');
	  break;
	  
	  case '3':
	  	 $('.each_item').slideUp('fast');
	     $('#hide1').slideDown('slow');
	     $('#hide2').slideDown('slow');
	     $('#hide3').slideDown('slow');
	  break;
	  
	  case '4':
	  	 $('.each_item').slideUp('fast');
	     $('#hide1').slideDown('slow');
	     $('#hide2').slideDown('slow');
	     $('#hide3').slideDown('slow');
	     $('#hide4').slideDown('slow');
	  break;
	  
	  case '5':
	  	 $('.each_item').slideUp('fast');
	     $('#hide1').slideDown('slow');
	     $('#hide2').slideDown('slow');
	     $('#hide3').slideDown('slow');
	     $('#hide4').slideDown('slow');
	     $('#hide5').slideDown('slow');
	  break;
	}
});

});