	$(document).ready(function(){
         $('#obj_submit').click(function(e){
                 $('#value_name').text("");
                 $('#value_email').text("");
			     $('#value_twitter').text("");
			     $('#value_submit').text("");
			     e.preventDefault();
			     var error_name = false;
			     var error_email = false;
			     var error_twitter = false;
	  
		        var name = $('#obj_name').val();
		        if(name.length == 0){  
		            error_name = true;
		            $('#value_name').append('<div style="color:#ff0000;">cannot be blank</div>');
		            $('#value_name').fadeIn("fast");
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
		        	$('#value_email').append('<div style="color:#ff0000;">invalid email address </div>'); 
		            $('#value_email').fadeIn("fast");
		        }
		     
		        var twitter = $('#obj_twitter').val();
		        if(twitter.length == 0){  
		            error_twitter = true;
		            $('#value_twitter').append('<div style="color:#ff0000;">cannot be blank</div>'); 
		            $('#value_twitter').fadeIn("fast");  
		        }else{
		        	error_twitter = false;
		            $('#value_twitter').hide(); 
		        }
		        			        
			        if(error_name == false && error_email == false && error_twitter==false ){ 
			        	
			            $('#obj_submit').attr({'disabled' : 'true', 'value' : 'Submitting...' });  
			  
			  			
			              
			            $.post("/feedback/submit", $("#theForm").serialize(),function(result){ 
			            	var trim = $.trim(result); 
			                if(trim == 'success'){
			                	$('#theForm').slideUp();
			                    $('#value_submit').append('<div style="color:green;">Thanks for your feedback!</div>');
								$('#value_submit').css("font-size","14px");
								$('#value_submit').css("font-weight","bold");
			                    $('#value_submit').fadeIn("slow"); 
			                }else{ 
			                    //show the mail failed div 
			                    $('#value_submit').append('<div style="color:#ff0000;">Sorry, don\'t know what happened. Try Again.</div>');
			                    $('#value_submit').css("font-size","14px");
			                    $('#value_submit').css("font-weight","bold");
			                    $('#value_submit').fadeIn("slow");
			                    $('#obj_submit').removeAttr('disabled').attr('value', 'Submit My Entry');  
			                }  
			            });  
			       	}
			       	
			       
			    });
                
            });
            
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}