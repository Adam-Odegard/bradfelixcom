$(document).ready(function(){

	
	$('#obj_submit').click(function(e){

	$('#value_name').text("");
	$('#value_email').text("");
	$('#value_comments').text("");
	$('#value_submit').text("");
	e.preventDefault();
	var error_name = false;
	var error_email = false;
	var error_comments = false;


    var name = $('#obj_name').val();
    if(name.length == 0){  
        error_name = true;
        $('#value_name').hide().append('<div style="color:#ff0000;">cannot be blank</div>').fadeIn("fast");
    }else{
    	error_name = false;
    	$('#value_name').hide(); 
    }

	var email = $('#obj_email').val();
    if(isValidEmailAddress(email) == true){
    	error_email = false;  
        $('#value_email').hide();
    }else{ 
    	error_email = true;
    	$('#value_email').hide().append('<div style="color:#ff0000;">invalid email address</div>').fadeIn("fast");
    }
    
   	var comments = $('#obj_comments').val();      
    if(comments.length == 0){  
        error_comments = true;
        $('#value_comments').hide().append('<div style="color:#ff0000;">cannot be blank</div>').fadeIn("fast");
    }else{
    
        error_why = false;
        $('#value_comments').hide();   
      
   }
    
   		      			        
        if(error_name == false && error_email == false && error_comments==false){ 
        	
            $('#obj_submit').attr({'disabled' : 'true', 'value' : 'Submitting...' });  
  
  			
              
			$.post("/Contact/submit/", $("#contact").serialize(),function(result){ 
							$('#contact').slideUp();
			    $('#value_submit').append('<div style="color:green;">Thank you!');
				$('#value_submit').css("font-size","14px");
				$('#value_submit').css("font-weight","bold");
			    $('#value_submit').fadeIn("slow"); 
			
			});  
       	}     
       	
       
	});
	
	
    
});
            
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}




