jQuery(document).ready(function(){ 

	// Show and Hide Menu 
	$("#btn-products").click(function() {
		$("#menu-produtos").slideToggle(400);
	});

	// Add class to li
	$("#menu-produtos").addClass( 'clearfix' );
	$("#menu-produtos li").addClass( 'col-lg-3 col-md-3 col-sm-6 col-xs-6' );

});