$(document).ready(function(){

	
	$('#subButton').click(function(e){
		e.preventDefault();
		var error_name = false;
		var error_email = false;
		var error_comments = false;
	
	
	    var name = $('#name').val();
	    if(name.length == 0){  
	        error_name = true;
	        $('#name').css({'background-color':'#ff0000'});
	    }else{
	    	error_name = false;
	    	$('#name').css({'background-color':'#fff'}); 
	    }
	
		var email = $('#email').val();
	    if(isValidEmailAddress(email) == true){
	    	error_email = false;  
	        $('#email').css({'background-color':'#fff'});
	    }else{ 
	    	error_email = true;
	    	$('#email').css({'background-color':'#ff0000'});
	    }
	    
	   	var comments = $('#comments').val();      
	    if(comments.length == 0){  
	        error_comments = true;
	        $('#comments').css({'background-color':'#ff0000'});
	    }else{
	    
	        error_why = false;
	        $('#comments').css({'background-color':'#fff'});   
	      
	   }
	    
	   		      			        
        if(error_name == false && error_email == false && error_comments==false){ 
        	
            $('#subButton').attr({'disabled' : 'true', 'value' : 'Submitting...' });  
			$.post("/contact/submit/", $("#loginform").serialize(),function(result){ 
				$('#loginform').slideUp();
			    $('#result').append('<div style="color:green;">Thank you!').fadeIn("slow"); 
			
			});  
       	}     
	       	
       
	});
	
	
    
});
            
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}




