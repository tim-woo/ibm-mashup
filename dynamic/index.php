<?php 
$now = "barrington";
$next = "ziggy";

/* kes, marcia, mr, barrington, ziggy */

$page="index";
 ?>

<html>
<head>
	<title> Dynamic Home </title>
	
	<link rel="shortcut icon" href="http://www.jazzreggaefest.com/files/Screen%20shot%202013-02-02%20at%208.32.06%20PM.png" type="image/png">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<!-- Include the slide show CSS -->
	<link rel="stylesheet" href="./libraries/responsiveslides/responsiveslides.css"/>
	
	<!-- Including our CSS file -->
	<link rel="stylesheet" href="./css/demo1.css"/>

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
				
				<!--
				<div class="slide-show">
					<ul class="rslides" id="slider1">
  						<li class="rslides-element"><img src="./images/slides/slide_santigold.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slides/slide_ziggy.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slides/slide_design.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slides/slide_stage.png" alt=""></li>
					</ul>
				</div> -->
				<div class="home-content" style="padding-top:10px;padding-bottom:20px;">
					<div class="left-column">
					
<?php if ($GLOBALS['now'] == "null" && $GLOBALS['next'] == "null")
	echo '<h1>Thank you for joining us<span style="font-family:Verdana, Arial, sans-serif;">!</span></h1><img src="http://www.jazzreggaefest.com/files/FLYER-01%20%281%29.jpg">'
?>


<?php if($GLOBALS['now'] != "null")	echo '<h1> Now Playing </h1>'; ?>
						
<?php						
switch ($GLOBALS['now'])
	{
  	case "ziggy":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=ziggy"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/ziggy.png" ></a></div>';
  		break;
  	case "barrington":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=barrington"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/barrington.png" ></a></div>';
  		break;
  	case "mr":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=mr"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/mr.png" ></a></div>';
  		break;
  	case "marcia":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=marcia"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/marcia.png" ></a></div>';
  		break;
  	case "kes":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=kes"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/kes.png" ></a></div>';
  		break;
	default:
  		echo '';
	}						
?>		

<?php if($GLOBALS['now'] != "null")	echo '<br>'; ?>				
											

<?php if($GLOBALS['next'] != "null")	echo '<h1> Up Next </h1>'; ?>
				
<?php						
switch ($GLOBALS['next'])
	{
  	case "ziggy":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=ziggy"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/ziggy.png" ></a></div>';
  		break;
  	case "barrington":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=barrington"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/barrington.png" ></a></div>';
  		break;
  	case "mr":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=mr"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/mr.png" ></a></div>';
  		break;
  	case "marcia":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=marcia"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/marcia.png" ></a></div>';
  		break;
  	case "kes":
  		echo '<div class="front-page-artist"><a href="./artist.php?id=kes"><img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/artists/kes.png" ></a></div>';
  		break;
	default:
  		echo '';
	}						
?>					
				
<?php if($GLOBALS['next'] != "null")	echo '<br>'; ?>


					</div> <!-- end left column -->
					
					<div class="right-column">
					
					<h1> <span style="font-family:Verdana, Arial, sans-serif;">#</span>jazz reggae </h1>
						
						<a class="twitter-timeline" href="https://twitter.com/search?q=%23jazzreggae+OR+%23jazzreggaefest+OR+%40JazzReggaeFest" data-widget-id="339069848648818690">Tweets about "#jazzreggae OR #jrf OR #jazzreggaefest OR @JazzReggaeFest"</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					
						
						
						<!--<iframe height="225" width="100%" src="http://8tracks.com/mixes/1474514/player_v3_universal" style="border: 0px none;" ></iframe>-->
						
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
		animated: false,
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

<script>
    $('a:contains(Home)').css("background","#00cde0");
    $('li:contains(Home)').css("background","#00cde0");
</script>

<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
    
</body>
	
	
</html>

