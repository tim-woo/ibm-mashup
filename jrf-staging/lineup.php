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
				<h1> Line Up </h1>
				
				<div class="artist-container">
				<a href="./artist.php"><img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/santigold.png"></a>
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/common.png">
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/grouch.png">
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/jhene.png">
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/ryan.png">
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/ziggy.png">
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/barrington.png">
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/mr.png">
				<img class="jrf-artist-img" src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/marcia.png">
				</div>
				
			</div> <!-- end #content -->
			
			<?php include('./includes/footer.php'); ?>
			
			
		</div> <!-- end #page -->
	
	</div> <!-- end #wrapper -->
	</div> <!-- end #full-view -->
	
	
    
</body>

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
</html>

