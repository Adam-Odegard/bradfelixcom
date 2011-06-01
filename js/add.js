	$(document).ready(function(){
	
    });

	function TestForValid(){
			     var func_one = false;
			     var func_two = false;
			     var func_three = false;
			     var func_four = false;
			     var func_five = false;
			     

			    
				num = $('#numoffiles').val();
				switch (num) {
			  	case '1':
			  		 func_one = One();
			  		 if(func_one == true){
			  		 	return false;
			  		 }
			 	break;
			 	
			 	case '2':
			  		 func_one = One();
			  		 func_two = Two();
			  		 if(func_one == true || func_two == true){
			  		 	return false;
			  		 }
			 	break;
			 	
			 	case '3':
			  		 func_one = One();
			  		 func_two = Two();
			  		 func_three = Three();
			  		 if(func_one == true || func_two == true || func_three == true){
			  		 	return false;
			  		 }
			 	break;
			 	
			 	case '4':
			  		 func_one = One();
			  		 func_two = Two();
			  		 func_three = Three();
			  		 func_four = Four();
			  		 if(func_one == true || func_two == true || func_three == true || func_four == true){
			  		 	return false;
			  		 }
			 	break;
			 	
			 	case '5':
			  		 func_one = One();
			  		 func_two = Two();
			  		 func_three = Three();
			  		 func_four = Four();
			  		 func_five = Five();
			  		 if(func_one == true || func_two == true || func_three == true || func_four == true || func_five == true){
			  		 	return false;
			  		 }
			 	break;
			 }
			  
			 return true;   	
		}	           
                
            
            
function One(){
	var error_file1 = false;
	var error_title1 = false;
	var error_minutes1 = false;
	var error_seconds1 = false;
	var error_description1 = false;

	var ext = $('#obj_file1').val().split('.').pop().toLowerCase();
	var allow = new Array('mp3');
	if(jQuery.inArray(ext, allow) == -1) {
		error_file1 = true;
	    $('#obj_file1').css({'background-color':'#ff0000'});
	}
	else
	{
		error_file1 = false;
    	 $('#obj_file1').css({'background-color':'#ffffff'});
	}
	
	var title1 = $('#obj_title1').val();
    if(title1.length == 0){  
        error_title1 = true;
        $('#obj_title1').css({'background-color':'#ff0000'});
    }else{
    	error_title1 = false;
    	 $('#obj_title1').css({'background-color':'#ffffff'}); 
    }
    
    var minutes1 = $('#obj_minutes1').val();
    if(!IsNumeric(minutes1) || minutes1 == ""){  
        error_minutes1 = true;
        $('#obj_minutes1').css({'background-color':'#ff0000'});
    }else{
    	error_minutes1 = false;
    	 $('#obj_minutes1').css({'background-color':'#ffffff'}); 
    }
    
    var seconds1 = $('#obj_seconds1').val();
    if(!IsNumeric(seconds1) || seconds1 == ""){  
        error_seconds1 = true;
        $('#obj_seconds1').css({'background-color':'#ff0000'});
    }else{
    	error_seconds1 = false;
    	 $('#obj_seconds1').css({'background-color':'#ffffff'}); 
    }
    
    var description1 = $('#obj_description1').val();
    if(description1.length == 0){  
        error_description1 = true;
        $('#obj_description1').css({'background-color':'#ff0000'});
    }else{
    	error_description1 = false;
    	 $('#obj_description1').css({'background-color':'#ffffff'}); 
    }
    
    if(error_file1 == false && error_title1 == false && error_minutes1==false && error_seconds1 == false && error_description1 == false){
    	return false;
    }
    else{
    	return true;
    }
}

function Two(){

	var error_file2 = false;
	var error_title2 = false;
	var error_minutes2 = false;
	var error_seconds2 = false;
	var error_description2 = false;

	var ext = $('#obj_file2').val().split('.').pop().toLowerCase();
	var allow = new Array('mp3');
	if($.inArray(ext, allow) == -1) {
		error_file2 = true;
	    $('#obj_file2').css({'background-color':'#ff0000'});
	}
	else
	{
		error_file2 = false;
    	 $('#obj_file2').css({'background-color':'#ffffff'});
	}
	
	var title2 = $('#obj_title2').val();
    if(title2.length == 0){  
        error_title2 = true;
        $('#obj_title2').css({'background-color':'#ff0000'});
    }else{
    	error_title2 = false;
    	 $('#obj_title2').css({'background-color':'#ffffff'}); 
    }
    
    var minutes2 = $('#obj_minutes2').val();
    if(!IsNumeric(minutes2) || minutes2 == ""){  
        error_minutes2 = true;
        $('#obj_minutes2').css({'background-color':'#ff0000'});
    }else{
    	error_minutes2 = false;
    	 $('#obj_minutes2').css({'background-color':'#ffffff'}); 
    }
    
    var seconds2 = $('#obj_seconds2').val();
    if(!IsNumeric(seconds2) || seconds2 == ""){  
        error_seconds2 = true;
        $('#obj_seconds2').css({'background-color':'#ff0000'});
    }else{
    	error_seconds2 = false;
    	 $('#obj_seconds2').css({'background-color':'#ffffff'}); 
    }
    
    var description2 = $('#obj_description2').val();
    if(description2.length == 0){  
        error_description2 = true;
        $('#obj_description2').css({'background-color':'#ff0000'});
    }else{
    	error_description2 = false;
    	 $('#obj_description2').css({'background-color':'#ffffff'}); 
    }
    
    if(error_file2 == false && error_title2 == false && error_minutes2==false && error_seconds2 == false && error_description2 == false){
    	return false;
    }
    else{
    	return true;
    }
}

function Three(){

	var error_file3 = false;
	var error_title3 = false;
	var error_minutes3 = false;
	var error_seconds3 = false;
	var error_description3 = false;

	var ext = $('#obj_file3').val().split('.').pop().toLowerCase();
	var allow = new Array('mp3');
	if($.inArray(ext, allow) == -1) {
		error_file3 = true;
	    $('#obj_file3').css({'background-color':'#ff0000'});
	}
	else
	{
		error_file3 = false;
    	 $('#obj_file3').css({'background-color':'#ffffff'});
	}
	
	var title3 = $('#obj_title3').val();
    if(title3.length == 0){  
        error_title3 = true;
        $('#obj_title3').css({'background-color':'#ff0000'});
    }else{
    	error_title3 = false;
    	 $('#obj_title3').css({'background-color':'#ffffff'}); 
    }
    
    var minutes3 = $('#obj_minutes3').val();
    if(!IsNumeric(minutes3) || minutes3 == ""){  
        error_minutes3 = true;
        $('#obj_minutes3').css({'background-color':'#ff0000'});
    }else{
    	error_minutes3 = false;
    	 $('#obj_minutes3').css({'background-color':'#ffffff'}); 
    }
    
    var seconds3 = $('#obj_seconds3').val();
    if(!IsNumeric(seconds3) || seconds3 == ""){  
        error_seconds3 = true;
        $('#obj_seconds3').css({'background-color':'#ff0000'});
    }else{
    	error_seconds3 = false;
    	 $('#obj_seconds3').css({'background-color':'#ffffff'}); 
    }
    
    var description3 = $('#obj_description3').val();
    if(description3.length == 0){  
        error_description3 = true;
        $('#obj_description3').css({'background-color':'#ff0000'});
    }else{
    	error_description3 = false;
    	 $('#obj_description3').css({'background-color':'#ffffff'}); 
    }
    
    if(error_file3 == false && error_title3 == false && error_minutes3==false && error_seconds3 == false && error_description3 == false){
    	return false;
    }
    else{
    	return true;
    }
}

function Four(){

	var error_file4 = false;
	var error_title4 = false;
	var error_minutes4 = false;
	var error_seconds4 = false;
	var error_description4 = false;

	var ext = $('#obj_file4').val().split('.').pop().toLowerCase();
	var allow = new Array('mp3');
	if($.inArray(ext, allow) == -1) {
		error_file4 = true;
	    $('#obj_file4').css({'background-color':'#ff0000'});
	}
	else
	{
		error_file4 = false;
    	 $('#obj_file4').css({'background-color':'#ffffff'});
	}
	
	var title4 = $('#obj_title4').val();
    if(title4.length == 0){  
        error_title4 = true;
        $('#obj_title4').css({'background-color':'#ff0000'});
    }else{
    	error_title4 = false;
    	 $('#obj_title4').css({'background-color':'#ffffff'}); 
    }
    
    var minutes4 = $('#obj_minutes4').val();
    if(!IsNumeric(minutes4) || minutes4 == ""){  
        error_minutes4 = true;
        $('#obj_minutes4').css({'background-color':'#ff0000'});
    }else{
    	error_minutes4 = false;
    	 $('#obj_minutes4').css({'background-color':'#ffffff'}); 
    }
    
    var seconds4 = $('#obj_seconds4').val();
    if(!IsNumeric(seconds4) || seconds4 == ""){  
        error_seconds4 = true;
        $('#obj_seconds4').css({'background-color':'#ff0000'});
    }else{
    	error_seconds4 = false;
    	 $('#obj_seconds4').css({'background-color':'#ffffff'}); 
    }
    
    var description4 = $('#obj_description4').val();
    if(description4.length == 0){  
        error_description4 = true;
        $('#obj_description4').css({'background-color':'#ff0000'});
    }else{
    	error_description4 = false;
    	 $('#obj_description4').css({'background-color':'#ffffff'}); 
    }
    
    if(error_file4 == false && error_title4 == false && error_minutes4==false && error_seconds4 == false && error_description4 == false){
    	return false;
    }
    else{
    	return true;
    }
}

function Five(){

	var error_file5 = false;
	var error_title5 = false;
	var error_minutes5 = false;
	var error_seconds5 = false;
	var error_description5 = false;

	var ext = $('#obj_file5').val().split('.').pop().toLowerCase();
	var allow = new Array('mp3');
	if($.inArray(ext, allow) == -1) {
		error_file5 = true;
	    $('#obj_file5').css({'background-color':'#ff0000'});
	}
	else
	{
		error_file5 = false;
    	 $('#obj_file5').css({'background-color':'#ffffff'});
	}
	
	var title5 = $('#obj_title5').val();
    if(title5.length == 0){  
        error_title5 = true;
        $('#obj_title5').css({'background-color':'#ff0000'});
    }else{
    	error_title5 = false;
        $('#obj_title5').css({'background-color':'#ffffff'});
    }
    
    var minutes5 = $('#obj_minutes5').val();
    if(!IsNumeric(minutes5) || minutes5 == ""){  
        error_minutes5 = true;
        $('#obj_minutes5').css({'background-color':'#ff0000'});
    }else{
    	error_minutes5 = false;
    	 $('#obj_minutes5').css({'background-color':'#ffffff'}); 
    }
    
    var seconds5 = $('#obj_seconds5').val();
    if(!IsNumeric(seconds5) || seconds5 == ""){  
        error_seconds5 = true;
        $('#obj_seconds5').css({'background-color':'#ff0000'});
    }else{
    	error_seconds5 = false;
    	 $('#obj_seconds5').css({'background-color':'#ffffff'}); 
    }
    
    var description5 = $('#obj_description5').val();
    if(description5.length == 0){  
        error_description5 = true;
        $('#obj_description5').css({'background-color':'#ff0000'});
    }else{
    	error_description5 = false;
    	 $('#obj_description5').css({'background-color':'#ffffff'}); 
    }
    
    if(error_file5 == false && error_title5 == false && error_minutes5==false && error_seconds5 == false && error_description5 == false){
    	return false;
    }
    else{
    	return true;
    }
}

function IsNumeric(sText)

{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
   
   }
 