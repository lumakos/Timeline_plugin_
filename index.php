<!DOCTYPE>
<html>
<head>
	<title>timeline</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="progress">
	  	<div class="circle">
		    <span class="label"></span>
		    <span class="title">Select appliance</span>
 	    </div>
	  	<span class="bar done"></span>
	  	<div class="circle">
		    <span class="label"></span>
		    <span class="title">Appliance's specifications</span>
	  	</div>
	  	<span class="bar half"></span>
	  	<div class="circle">
   			<span class="label"></span>
   			<span class="title">Seasonality</span>
	  	</div>
	  	<span class="bar"></span>
	  	<div class="circle">
	    	<span class="label"></span>
	    	<span class="title">Confirmation</span>
	  	</div>
	</div>
	<div style="text-align: center;">
		<button id="previous">previous!</button>
		<button id="next">next!</button>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var i = 1;
		    $('.progress .circle').removeClass().addClass('circle');
		    $('.progress .circle').first().addClass('active');
		    $('.progress .bar').removeClass().addClass('bar');

			$("#next").click(function(){
				$(".progress").find('.circle').eq(i).addClass('active');
				$(".progress").find('.circle').eq(i-1).removeClass('active').addClass('done');
				$(".progress").find('.bar').eq(i-1).addClass('active');
				i++;

			    if (i<=0) {
			      $('.progress .bar').removeClass().addClass('bar');
			      $('.progress div.circle').removeClass().addClass('circle');
			      i = 1;
			    }
				if(i > 4) {
					return false;
				}
			});
			$("#previous").click(function(){
				i--;
				$(".progress").find('.circle').eq(i).removeClass('active').removeClass('done');
				$(".progress").find('.bar').eq(i-1).removeClass('active');
				console.log('previous');

			});
		});
	</script>
</body>
</html>