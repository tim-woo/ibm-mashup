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
				<img src="http://www.paradigmagency.com/Asset/s/a/santigold-main--photo-credit-sean-thomas-extralarge_1327359655725-medium.jpg">
				<div class="bio-container">
					Santigold is Santi White: an artist whose perseverance relies on invention, a champion who survives off her own skill and faith. She is a major muse watched by the inspired world, an in categorical performer who collapses time and genre with one hand guided by tradition, while the other hand carves out a shining future. Santigold is neither calm nor mayhem, but from her lungs burst every color in between. 

After four years of hide and seek in which blogs blew up at the sudden release of any track with her name attached to it, Santigold returns in a moment of global aggression and vulnerability. Honing in on the hyper-media cult of personality, in her unmistakable voice she asks the listener: Into what fantasy do you hurl yourself as you gaze into the glow of your machine? The answer to this question is central to what drives "Master of My Make-Believe," her latest work.
				</div>
				
				<h1> YOUTUBE </h1>
				<div class="video-container">
					<iframe src="http://www.youtube.com/embed/mIMMZQJ1H6E" frameborder="0" allowfullscreen></iframe>
				</div>
				
				<h1> SOUNDCLOUD </h1>
				<div class="audio-container">
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F47836153"></iframe>
				</div>
				<div class="audio-container">
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F43420259"></iframe>
				</div>
				
				<h1> RELATED ARTISTS </h1>			
				
				
								
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

