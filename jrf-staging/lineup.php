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
				
				<div class="grid-img">
					<a href="./artist.php?id=santigold">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/santigold.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=common">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/common.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=grouch">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/grouch.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=jhene">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/jhene.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=ryan">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/ryan.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=ziggy">
						<img src="./images/ziggy.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=barrington">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/barrington.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=vegas">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/mr.png">
					</a>
				</div>
				<div class="grid-img">
					<a href="./artist.php?id=marcia">
						<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/marcia.png">
					</a>
				</div>
				<div class="spacer" style="clear: both;"></div>
				
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
$(window).resize(function(){

	var height = ($(".grid-img-overlay").height() - $('.overlay-text').outerHeight())/2;
	
	// If height is incorrectly negative (unknown bug), manually set 8, a safe number
	if (height < 0)
		height = 8;

    $('.overlay-text').css({
        position:'absolute',
        right: 0,
        top: height
    });

});
// To initially run the function:
$(window).resize();
</script>
<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
	
    
</body>
	
</html>

