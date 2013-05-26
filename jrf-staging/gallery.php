<html>
<head>
	<title> Gallery </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<!-- Include the slide show CSS -->
	<link rel="stylesheet" href="./libraries/responsiveslides/responsiveslides.css"/>
	

	<!-- Including the most recent JQuery Library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<!-- Include the sliding menu library -->
	<script type="text/javascript" src="./libraries/jpanelmenu/jquery.jpanelmenu.js"></script>
	
	<!-- Include the slide show library -->
	<script type="text/javascript" src="./libraries/responsiveslides/responsiveslides.min.js"></script>

	<!-- Gallery plugin -->
	<link rel="stylesheet" type="text/css" href="./libraries/gallery/css/style.css" />
	<link rel="stylesheet" type="text/css" href="./libraries/gallery/css/elastislide.css" />
	
	<!-- Our CSS --><!-- Including our CSS file -->
	<link rel="stylesheet" href="./css/demo.css"/>
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		
	<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
	</noscript>
		
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
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
				
				<div class="basic-padding">
				

<?php
	switch($_GET['id'])
	{
		case "x":
			echo '<h1> X is The Weapon </h1>
			
X is the Weapon is an artist collective based in Orange County that will be featured at this year’s exhibition. Several artists will also be doing live art during both days of the festival. We hope to show process alongside final product, so you can see how these artists bring their works from start to completion.
<br>
<br>
<a href="http://xistheweapon.com/"> http://xistheweapon.com/ </a>
<br>
<br>';
			break;
		case "sole":
			echo '<h1>Sole Bicyles</h1>

Founded by two USC graduates and now based in Venice Beach, Sole Bicycles started with the goal of creating affordable and well-designed fixed gear bikes, but they didn’t just stop there.Sole also has a team of artists that turns selected bikes into works of art. At the festival, you will get to see these bikes alongside artists’ other works to experience the full range of art produced by theSole collective.
<br>
<br>
<a href="http://www.solebicycles.com/"> http://www.solebicycles.com/ </a>
<br>
<br>
';
			break;
		case "student":
			echo '<h1>Student Art Competition</h1>';
			break;
		case "photo":
			echo '<h1>Photo Project</h1>

As part of our mission to make art interactive and diverse, JazzReggae launched a collaborative photo project that will be displayed as part of the exhibition this year. Contestants were given little instruction, only that their submission had to be inspired by Los Angeles, opening the project up to a range of interpretations. Winning submissions will be displayed for the first time at the festival in a collaborative collage piece.
<br>
<br>';
			break;
		default:
			echo '';
				
	}
?>



	<div id="rg-gallery" class="rg-gallery">
		<div class="rg-thumbs">
			<!-- Elastislide Carousel Thumbnail Viewer -->
			<div class="es-carousel-wrapper">
				<div class="es-nav">
					<span class="es-nav-prev">Previous</span>
					<span class="es-nav-next">Next</span>
				</div>
				<div class="es-carousel">
					<ul>
					
					
					
<?php
	switch($_GET['id'])
	{
		case "x":
			echo '
			
<li><a href="#"><img src="" data-large="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/gallery/artemisNolascoGypsyWoman.png" alt="image01" data-description="Gypsy Woman - Artemis Nolasco" /></a></li>
<li><a href="#"><img src="" data-large="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/gallery/artemisNolascoSantigold.png" alt="image01" data-description="Santigold - Artemis Nolasco" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
	
					
					';
			break;
		case "sole":
			echo '
			
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
	
					
					';
			break;
		case "student":
			echo '
			
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
	
					
					';
			break;
		case "photo":
			echo '
			
<li><a href="#"><img src="" data-large="" alt="image01" data-description="" /></a></li>
	
					
					';
			break;
		default:
			echo '';
				
	}
?>
					
					</ul>
				</div>
			</div>
			<!-- End Elastislide Carousel Thumbnail Viewer -->
		</div><!-- rg-thumbs -->
	</div><!-- rg-gallery -->
			

				
			</div> <!-- end basic-padding -->

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

<script>
    $('a:contains(Art)').css("background","#00cde0");
    $('li:contains(Art)').css("background","#00cde0");
</script>


<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>	
 
 
 
 
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="./libraries/gallery/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="./libraries/gallery/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="./libraries/gallery/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="./libraries/gallery/js/gallery.js"></script>
 
 
 
    
</body>


</html>

