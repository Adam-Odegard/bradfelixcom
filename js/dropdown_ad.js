$(document).ready(function() {
	$("#promo_top").hover(function() {
		$("#promo_top").height(200);
		$("#top_ad").height(200);
     	$("#promo_top").slideDown("fast");
}, function() {
	 $("#promo_top").height(40);
		$("#top_ad").height(40);
     $("#msgtxt1").slideUp("fast");
});
});