<html>
<head>
	<title> MyVent Template Container </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<!-- Include the slide show CSS -->
	<link rel="stylesheet" href="./libraries/responsiveslides/responsiveslides.css"/>
	
	<!-- Including flipper CSS -->
	<link rel="stylesheet" href="./css/card-flipper.css"/>
	
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
				<h1> Food Vendors</h1>
				
				
				<div class="artist-container">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/alex.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/auntie.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/barrets.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/california.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/chow.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/derricks.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/dippin.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/dubble.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/hawkins.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/irie.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/island.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/joes.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/kamils.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/kobbler.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/mediterranean.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/mrs.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/natraliart.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/patties.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/philly.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/sr.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/shabazz.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/shilo.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/stones.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/strictly.png">
				<img class="grid-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/sweet.png">
				
				<div class="spacer" style="clear: both;"></div>
				
				</div>
				
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="front">
							SWAG
						</div>
						<div class="back">
							SWERVE
						</div>
					</div>
				</div>
				
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
<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
    
</body>


</html>

