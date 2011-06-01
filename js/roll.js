$(document).ready(function(){

	
	$('#obj_submit').click(function(e){

	$('#value_name').text("");
	$('#value_roll').text("");
	$('#value_submit').text("");
	e.preventDefault();
	var error_name = false;

    var name = $('#obj_name').val();
   if(name.length == 0){  
        error_name = true;
        $('#value_name').hide().append('<div style="color:#ff0000;">cannot be blank</div>').fadeIn("fast");
    }else{
    	error_name = false;
    	$('#value_name').hide(); 
    }
    
   		      			        
        if(error_name == false){ 
        	
            $('#obj_submit').attr({'disabled' : 'true', 'value' : 'Submitting...' });  
  
			$.post("/Roll/SaveRoll/", $("#roll").serialize(),function(result){ 
				$('#roll').slideUp();
			    $('#value_submit').append('<div style="color:red;">You rolled a ' + result + ' (1-100)');
				$('#value_submit').css("font-size","14px");
				$('#value_submit').css("font-weight","bold");
			    $('#value_submit').fadeIn("slow"); 
			    setTimeout("5000"); 
			
			});
			
			
			
			$.getJSON("/Roll/Refresh",function(data){
			var stuff;
			var intRegex = /^\d+$/;
			var count = 1;
	          $.each(data, function(i,item){
	          if(count <= 10){
	          		if(count == 1){
	          			stuff = "<div>" + item['name'] + " - " + item['roll'] + "</div>";
	          		}else{
	          			stuff += "<div>" + item['name'] + " - " + item['roll'] + "</div>";
	          		}
	           	
	           }
	           	count++;
	          });
	          //alert(stuff);
	          $("#results").append(stuff);
	          $("#title").append("<b><u>Last 10 Roll's</u></b>");
	        });
	        
	       }
	       
       	
       
	});
	
	
	
	
    
});
            