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
			
				<h1> Jam Day </h1> 
				<div class="artist-container">
				
				<div class="grid-img">
					<a href="./artist.php?id=santigold">
						<img src="./images/artists/lineup/santigold.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Santigold</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=common">
						<img src="./images/artists/lineup/common.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Common</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=grouch">
						<img src="./images/artists/lineup/grouch.png">
						<div class="grid-img-overlay">
							<div class="overlay-text" style="font-size:24px;">The Grouch & Eligh</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=jhene">
						<img src="./images/artists/lineup/jhene.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Jhene</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=ryan">
						<img src="./images/artists/lineup/ryan.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Ryan McDermott</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=gluck">
						<img src="./images/artists/lineup/gluck.png">
						<div class="grid-img-overlay">
							<div class="overlay-text" style="font-size:24px;">Gluck Jazz Ensemble</div>
						</div>
					</a>
				</div>
				
				<div class="spacer" style="clear: both;"></div>
				</div>
				
				<h1> Reggae Day </h1> 
				
				<div class="artist-container">
				<div class="grid-img">
					<a href="./artist.php?id=ziggy">
						<img src="./images/artists/lineup/ziggy.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Ziggy Marley</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=barringon">
						<img src="./images/artists/lineup/barrington.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Barrington Levy</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=mr">
						<img src="./images/artists/lineup/mr.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Mr. Vegas</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=marcia">
						<img src="./images/artists/lineup/marcia.png">
						<div class="grid-img-overlay">
							<div class="overlay-text">Marcia Griffiths</div>
						</div>
					</a>
				</div>
				
				<div class="grid-img">
					<a href="./artist.php?id=kes">
						<img src="./images/artists/lineup/kes.jpg">
						<div class="grid-img-overlay">
							<div class="overlay-text">Kes the Band</div>
						</div>
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
	
	// If height is incorrectly negative (unknown bug), manually set 10, a safe number
	if (height < 0)
		height = 10;

    $('.overlay-text').css({
        position:'absolute',
        right: 0,
        top: height
    });

});
// To initially run the function:
$(window).resize();
</script>

<script>
    $('a:contains(Line)').css("background","#00cde0");
    $('li:contains(Line)').css("background","#00cde0");
</script>

<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
	
    
</body>
	
</html>

