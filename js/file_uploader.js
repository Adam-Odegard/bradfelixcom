$(document).ready(function() {
	
	$('#obj_file1').uploadify({
		'uploader'  : '/images/uploadify.swf',
		'script'    : '/php/uploadify.php',
		'cancelImg' : '/images/cancel.png',
		'folder'    : '/mp3',
		'auto'      : true,
		'removeCompleted': false,
		'onComplete'  : function(event, ID, fileObj, response, data) {
	      $("input[name=hidden_file1]").val(fileObj.name);
	    }
	});
	
	
	$('#obj_file2').uploadify({
		'uploader'  : '/images/uploadify.swf',
		'script'    : '/php/uploadify.php',
		'cancelImg' : '/images/cancel.png',
		'folder'    : '/mp3',
		'auto'      : true,
		'removeCompleted': false,
		'onComplete'  : function(event, ID, fileObj, response, data) {
	      $("input[name=hidden_file2]").val(fileObj.name);
	    }
	});
	
	$('#obj_file3').uploadify({
		'uploader'  : '/images/uploadify.swf',
		'script'    : '/php/uploadify.php',
		'cancelImg' : '/images/cancel.png',
		'folder'    : '/mp3',
		'auto'      : true,
		'removeCompleted': false,
		'onComplete'  : function(event, ID, fileObj, response, data) {
	      $("input[name=hidden_file3]").val(fileObj.name);
	    }
	});
	
	$('#obj_file4').uploadify({
		'uploader'  : '/images/uploadify.swf',
		'script'    : '/php/uploadify.php',
		'cancelImg' : '/images/cancel.png',
		'folder'    : '/mp3',
		'auto'      : true,
		'removeCompleted': false,
		'onComplete'  : function(event, ID, fileObj, response, data) {
	      $("input[name=hidden_file4]").val(fileObj.name);
	    }
	});
	
	$('#obj_file5').uploadify({
		'uploader'  : '/images/uploadify.swf',
		'script'    : '/php/uploadify.php',
		'cancelImg' : '/images/cancel.png',
		'folder'    : '/mp3',
		'auto'      : true,
		'removeCompleted': false,
		'onComplete'  : function(event, ID, fileObj, response, data) {
	      $("input[name=hidden_file5]").val(fileObj.name);
	    }
	});
});
