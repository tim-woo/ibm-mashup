<html>
<head>
	<title> Dynamic Line Up </title>
	
	<link rel="shortcut icon" href="http://www.jazzreggaefest.com/files/Screen%20shot%202013-02-02%20at%208.32.06%20PM.png" type="image/png">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<!-- Include the slide show CSS -->
	<link rel="stylesheet" href="./libraries/responsiveslides/responsiveslides.css"/>
	
	<!-- Including our CSS file -->
	<link rel="stylesheet" href="./css/demo2.css"/>

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
				
				<?php
					//http://ec2-23-22-104-155.compute-1.amazonaws.com:8080/event/artists?eventID=2 
			
					$json_url = "http://ec2-23-22-104-155.compute-1.amazonaws.com:8080/event/artists?eventID=2";
					//$json_url .= urlencode($_GET['artistId']);
					//$json_url .= "&name=";
					//$json_url .= urlencode($_GET['artistName']);
				
					//echo $json_url;
				
					$json = file_get_contents($json_url);
					$data = json_decode($json, TRUE);
							
							
					$artists = $data['artists'];
							
					foreach ($artists as $artistObject => $artist) {
						echo '<div class="grid-img">';
						
						echo '<a href="./artist.php?id=';
						echo urlencode($artist['artistID']);
						echo '">';
						
						if(intval($artist['artistID']) > 13)
						{
							$imageURL = $artist['primary_picture'];
							echo '<img class="header-title" src="image.php?url='.$imageURL.'">';
						}
						else
						{
							echo '<img src="';
							//echo './images/artists/lineup/ziggy.png'; // FIX
							echo $artist['primary_picture'];
							echo '">';
						}
						
						echo '<div class="grid-img-overlay">';
						
						echo '<div class="overlay-text">';
						echo $artist['name'];
						echo '</div>';
						
						echo '</div>';
						echo '</a>';
						echo '</div>';
						
					}
				
				?>
				
				
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
		animated: false,
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

