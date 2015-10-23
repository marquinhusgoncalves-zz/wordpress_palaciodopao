	$(document).ready(
		function() {
			$('#menu-item-274 a').css('color', '#6678C5').html('<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse" style = "margin-top: 1px"></i></span>');
			$('#menu-item-275 a').css('color', '#F94877').html('<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-foursquare fa-stack-1x fa-inverse" style = "margin-top: 4px"></i></span>');
			$('#menu-item-276 a').css('color', '#55ACEE').html('<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse" style = "margin-top: 1px"></i></span>');
			$('#menu-item-361 a').css('color', '#125688').html('<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse" style = "margin-top: 1px"></i></span>');
			$(".screen-reader-text").hide();
		}
	);

	$(document).ready(
		function() {
		$(".toggle i").click(function() {
			 var $this = $(this);
			 if ($this.hasClass("fa-bars")) {
					$this.removeClass("fa-bars").addClass("fa-times");
					$("#logo").css('position', 'fixed');
					return;
			 }
			 if ($this.hasClass("fa-times")) {
					$this.removeClass("fa-times").addClass("fa-bars");
					$("#logo").css('position', 'absolute');
					return;
				 }
			});

	});