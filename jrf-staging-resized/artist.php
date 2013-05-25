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

	<!-- FACEBOOK INCLUDE -->
<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



	<div class="menu-trigger"><a href="javascript:triggerMenu();">Menu</a></div>
	<div class="side-strip"></div>
	
	
	<div id="full-view">
	<div id="wrapper">
	
		<div id="page">
		
			<?php include('./includes/header.php'); ?>
			
			<?php include('./includes/nav.php'); ?>
			<?php include('./includes/nav-side.php'); ?>

			
			
			<!-- Variable Content Goes Here -->
			<?php 
				$artistID = $_GET['id'];
				include('./includes/artist_functions.php'); 
			?>
			
			<div id="content">
				
					<h1> <?php artistName($artistID); ?> </h1> <!-- Just a test, remove eventually -->
			
						<img src="<?php artistPrimaryImgURL($artistID); ?>">
						<div class="bio-container"><?php artistBio($artistID); ?></div>
				
						
						<div class="video-container">
							<iframe src="<?php artistVideo($artistID); ?>" frameborder="0" allowfullscreen></iframe>
						</div>
					

						<?php soundcloudAudio($artistID); ?>
						
					<div class="audio-container">
					<iframe src="https://embed.spotify.com/?uri=spotify:track:0t2QiRkpag0fAgs9zuCPlH" width="400" height="80" frameborder="0" allowtransparency="true"></iframe>
					</div>

					<a class="twitter-timeline" href="https://twitter.com/Santigold" data-widget-id="337416478875869185">Tweets by @Santigold</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>




<!-- FACEBOOK -->
<div class="audio-container">
<div class="fb-like" data-href="https://www.facebook.com/Santigold" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
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
		animated: false,
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

