jQuery(document).ready(function(){ 

	// Show and Hide Menu 
	$(".botao").click(function() {
		$("#menu-menu-produtos").slideToggle(400);
	});

	// Toogle Menu Name
	$(".botao").click(function() {

	});

	// Add class to li
	$("#menu-menu-produtos").addClass( 'clearfix' );
	$("#menu-menu-produtos li").addClass( 'col-lg-3 col-md-3 col-sm-6 col-xs-6' );


});