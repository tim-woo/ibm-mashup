<html>
<head>
	<title> Dynamic Artist </title>
	
	<link rel="shortcut icon" href="http://www.jazzreggaefest.com/files/Screen%20shot%202013-02-02%20at%208.32.06%20PM.png" type="image/png">
	
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41238300-1', 'jazzreggaefest.com');
  ga('send', 'pageview');

</script>

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
			
				<?php
					//http://ec2-23-22-104-155.compute-1.amazonaws.com:8080/event/artists?eventID=2 
			
					$json_url = "http://ec2-23-22-104-155.compute-1.amazonaws.com:8080/event/artist?eventID=2&artistID=";
					$json_url .= urlencode($_GET['id']);
				
					$json = file_get_contents($json_url);
					$data = json_decode($json, TRUE);
							
					$name = $data['name'];
					$bio = $data['bio'];
					$image = $data['image'];
					$video = $data['video'];
					$sound = $data['sound'];
					
					//$bio = 'Santigold is Santi White: an artist whose perseverance relies on invention, a champion who survives off her own skill and faith. She is a major muse watched by the inspired world, an in categorical performer who collapses time and genre with one hand guided by tradition, while the other hand carves out a shining future. Santigold is neither calm nor mayhem, but from her lungs burst every color in between. After four years of hide and seek in which blogs blew up at the sudden release of any track with her name attached to it, Santigold returns in a moment of global aggression and vulnerability. Honing in on the hyper-media cult of personality, in her unmistakable voice she asks the listener: Into what fantasy do you hurl yourself as you gaze into the glow of your machine? The answer to this question is central to what drives "Master of My Make-Believe," her latest work.';					$image = './images/artists/large/santigold_large.png';
					//$video = 'mIMMZQJ1H6E';
					//$sound = $data['sound'];
					
					//echo $name;
			
				?>
			
				
					<h1> <?php echo $name; ?> </h1> <!-- Just a test, remove eventually -->
			
						<?php 
						echo '<img src="';
						echo $image;
						echo '"></img>';
						?>
						
						<div class="bio-container"><?php echo $bio; ?></div>
				
						
						<div class="video-container">
							<iframe src="http://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
							<br>
						</div>
					

						
						<?php 
						
						 if(intval($artistID) === 3)
						 	soundcloudAudio('43420259'); 
						 
						 if(intval($artistID) > 13)
						 	soundcloudAudio($sound);
						 
						 ?>
						
						<br>

						
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

