<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<title>Mickey Molad</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="/css.min.css">

	<link rel="stylesheet" href="/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

	<link rel="stylesheet" href="/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/helpers/jquery.fancybox-thumbs.js"></script>

	<link rel="stylesheet" href="/swipebox/css/swipebox.css">
	<script src="/swipebox/js/jquery.swipebox.js"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox({
			// fitToView : false,
			helpers : {
				title	: {
					type: 'outside',
					position: "top"
				},
				thumbs	: {
					width	: 50,
					height	: 50,
					position: "top"
				}
			}
		});
		$('.fancybox + .additional').children().each(function() {
			$(this).attr('rel',$(this).parent().parent().find('.fancybox').first().attr('rel'))
		});

		( function( $ ) {

			$( '.swipebox' ).swipebox();

		} )( jQuery );

		$('.swipebox + .additional').children().each(function() {
			$(this).attr('rel',$(this).parent().parent().find('.swipebox').first().attr('rel'))
		});

		$('nav a').each(function() {
		    if ($(this).prop('href') == window.location.href) {
		      $(this).addClass('active');
		    };
		});
	});
	</script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73740325-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>