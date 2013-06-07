<html>
<head>
	<title> Line Up </title>
	
	<link rel="shortcut icon" href="http://www.jazzreggaefest.com/files/Screen%20shot%202013-02-02%20at%208.32.06%20PM.png" type="image/png">
	
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
		
			<?php //include('./includes/header.php'); ?>
			
			<?php 
				
				$json_url = "http://ec2-23-22-104-155.compute-1.amazonaws.com:8080/getArtistImages?id=";
				$json_url .= urlencode($_GET['artistId']);
				$json_url .= "&name=";
				$json_url .= urlencode($_GET['artistName']);
				
				echo $json_url;
				
				$json = file_get_contents($json_url);
				$data = json_decode($json, TRUE);
							
				$images = $data['images'];
				
				$counter = 0;
							
				foreach ($images as $imageObject => $image) {
					
					$imageURL = $image['url'];
					
					//echo $imageURL;
					
					
					echo '<img class="header-title" src="image.php?url='.$imageURL.'">';
					
					$counter = $counter + 1;
					if($counter == 4)
						break;
									
				}
				
				
				
			?>
			
			<?php include('./includes/nav.php'); ?>
			<?php //include('./includes/nav-side.php'); ?>

			
			
			<!-- Variable Content Goes Here -->
			<?php 
				//$artistID = $_GET['id'];
				//include('./includes/artist_functions.php'); 
			?>
			
			<div id="content">
				
					<h1> <?php echo $_GET['artistName']; ?> </h1> <!-- Just a test, remove eventually -->
			
						<img src="<?php echo $_GET['artistImage']; ?>">
						<div class="bio-container">
						<?php 
						
							$json_url = "./json/artistBiographies.json";
							$json = file_get_contents($json_url);
							$data = json_decode($json, TRUE);
							
							$biographies = $data['biographies'];
							
							foreach ($biographies as $biographyObject => $biography) {
								if($biography['site'] === $_GET['artistBio'])
								{
    								echo $biography['text'];
    								break;
    							}
							}
							
						?>
						</div>
				
						
						<?php 
						
							$videoArray = $_GET['v'];
						
							foreach ($videoArray as &$video) {
								
								echo '<div class="video-container">';
								echo '<iframe src="http://www.youtube.com/embed/';
								echo $video;
								echo '" frameborder="0" allowfullscreen></iframe>';
								echo '</div>';
								echo '<br>';
							}
						
						 ?>
						
						<br>
						
						<?php 
							$songArray = $_GET['s'];
						
							foreach ($songArray as &$song) {
								
								echo '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F';
								echo $song;
								echo '"></iframe>';
								echo '<br><br>';
							}
						
						 ?>
						
						<?php
							if($_GET['artistNews'] === 'true')
							{
								$json_url = "./json/artistNews.json";
								$json = file_get_contents($json_url);
								$data = json_decode($json, TRUE);
								
								$news = $data['news'];
							
								foreach ($news as $newsObject => $article) {
								
									echo '<a href="';
									echo $article['url'];
									echo '">';
									echo $article['title'];
									echo '</a>';
									echo '<br><br>';
		
								}
							}
						?>

						
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

