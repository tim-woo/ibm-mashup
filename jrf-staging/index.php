<?php $page="index" ?>

<html>
<head>
	<title> MyVent Template Container </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<!-- Include the slide show CSS -->
	<link rel="stylesheet" href="./libraries/responsiveslides/responsiveslides.css"/>
	
	<!-- Including our CSS file -->
	<link rel="stylesheet" href="./css/demo.css"/>

	<!-- Including the most recent JQuery Library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<!-- Include the sliding menu library -->
	<script type="text/javascript" src="./libraries/jpanelmenu/jquery.jpanelmenu.js"></script>
	
	<!-- Include the slide show library -->
	<script type="text/javascript" src="./libraries/responsiveslides/responsiveslides.min.js"></script>


</head>

<body>

	<div class="menu-trigger"><a href="javascript:triggerMenu();">Menu</a></div>
	<div class="side-strip"></div>
	
	
	<div id="full-view">
	<div id="wrapper">
	
		<div id="page">
		
			<?php include('./includes/header.php'); ?>
			
			<?php include('./includes/nav.php'); ?>
			<?php include('./includes/nav-side.php'); ?>
			
			
			<!-- Variable Content Goes Here -->
			<div id="content">
				<div class="slide-show">
					<ul class="rslides" id="slider1">
  						<li class="rslides-element"><img src="./images/slides/slide_santigold.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slides/slide_ziggy.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slides/slide_design.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slides/slide_stage.png" alt=""></li>
					</ul>
				</div>
	
				<div class="home-content" style="padding-top:10px;padding-bottom:20px;">
					<div class="left-column">
						<h1>Event Flyer</h1>
						<img src="./images/home/flyer.jpg">
						
					</div> <!-- end left column -->
					
					<div class="right-column">
						<img src="./images/home/infographic.png">
						
						</br>
						</br>
						<img src="./images/home/divider.png">
						</br>
						</br>
						</br>
						
						<img src="./images/home/email.png">
						
						</br>
						</br>
						</br>
						<img src="./images/home/divider.png">
						</br>
						</br>
						</br>
						
						<iframe height="225" width="100%" src="http://8tracks.com/mixes/1474514/player_v3_universal" style="border: 0px none;" ></iframe>
						
					</div> <!-- end right column -->
					<div class="spacer" style="clear: both;"></div>
					
				</div> <!-- end dummy-content -->
				
				
			</div> <!-- end #content -->
			
			<?php include('./includes/footer.php'); ?>
			
			
		</div> <!-- end #page -->
	
	</div> <!-- end #wrapper -->
	</div> <!-- end #full-view -->
	
<!-- Sliding menu javascript -->
<script type="text/javascript">
	//var jPM = $.jPanelMenu();
	var jPM = $.jPanelMenu({
    	menu: '#nav-side',
    	
	});	
	jPM.on();
</script>

<!-- Slideshow javascript -->
<script>
  $(function() {
    $("#slider1").responsiveSlides({
        speed: 800
      });
  });
</script>

<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
    
</body>
	
	
</html>

