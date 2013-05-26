<html>
<head>
	<title> MyVent Template Container </title>
	
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
				<h1> Arts Exhibit </h1>
				
				<div class="basic-padding">
				
JazzReggae is pleased to announce the various art exhibits and craft projects featured at this year's festival! The art exhibition is expected to be better than ever this year with dynamic art pieces and installations provided by both hip companies and local artists.
<br>
<br>

<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/gallery/june22StudyInWatercolorVsAerosol.png">

</br>
</br>

The art exhibit will continue the thread of sustainability that is largely apparent throughout the entire festival with the use of eco-friendly paints and recycled canvases. With the expertise of the JRF Sustainability crew, we will also feature a colorful and vibrant installation made from recycled materials. As we believe that green living can be beautiful, there will also be an eco- friendly craft station featuring kid-focused projects and activities. Further, there will be a large- scale chalkboard on which visitors can voice their green initiative in an artistic and creative way.
<br>
<br>



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
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/1.jpg" data-large="./libraries/gallery/images/1.jpg" alt="image01" data-description="From off a hill whose concave womb reworded" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/2.jpg" data-large="./libraries/gallery/images/2.jpg" alt="image02" data-description="A plaintful story from a sistering vale" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/3.jpg" data-large="./libraries/gallery/images/3.jpg" alt="image03" data-description="A plaintful story from a sistering vale" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/4.jpg" data-large="./libraries/gallery/images/4.jpg" alt="image04" data-description="My spirits to attend this double voice accorded" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/5.jpg" data-large="./libraries/gallery/images/5.jpg" alt="image05" data-description="And down I laid to list the sad-tuned tale" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/6.jpg" data-large="./libraries/gallery/images/6.jpg" alt="image06" data-description="Ere long espied a fickle maid full pale" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/7.jpg" data-large="./libraries/gallery/images/7.jpg" alt="image07" data-description="Tearing of papers, breaking rings a-twain" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/8.jpg" data-large="./libraries/gallery/images/8.jpg" alt="image08" data-description="Storming her world with sorrow's wind and rain" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/9.jpg" data-large="./libraries/gallery/images/9.jpg" alt="image09" data-description="Upon her head a platted hive of straw" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/10.jpg" data-large="./libraries/gallery/images/10.jpg" alt="image10" data-description="Which fortified her visage from the sun" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/11.jpg" data-large="./libraries/gallery/images/11.jpg" alt="image11" data-description="Whereon the thought might think sometime it saw" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/12.jpg" data-large="./libraries/gallery/images/12.jpg" alt="image12" data-description="The carcass of beauty spent and done" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/13.jpg" data-large="./libraries/gallery/images/13.jpg" alt="image13" data-description="Time had not scythed all that youth begun" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/14.jpg" data-large="./libraries/gallery/images/14.jpg" alt="image14" data-description="Nor youth all quit; but, spite of heaven's fell rage" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/15.jpg" data-large="./libraries/gallery/images/15.jpg" alt="image15" data-description="Some beauty peep'd through lattice of sear'd age" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/16.jpg" data-large="./libraries/gallery/images/16.jpg" alt="image16" data-description="Oft did she heave her napkin to her eyne" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/17.jpg" data-large="./libraries/gallery/images/17.jpg" alt="image17" data-description="Which on it had conceited characters" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/18.jpg" data-large="./libraries/gallery/images/18.jpg" alt="image18" data-description="Laundering the silken figures in the brine" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/19.jpg" data-large="./libraries/gallery/images/19.jpg" alt="image19" data-description="That season'd woe had pelleted in tears" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/20.jpg" data-large="./libraries/gallery/images/20.jpg" alt="image20" data-description="And often reading what contents it bears" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/21.jpg" data-large="./libraries/gallery/images/21.jpg" alt="image21" data-description="As often shrieking undistinguish'd woe" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/22.jpg" data-large="./libraries/gallery/images/22.jpg" alt="image22" data-description="In clamours of all size, both high and low" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/23.jpg" data-large="./libraries/gallery/images/23.jpg" alt="image23" data-description="Sometimes her levell'd eyes their carriage ride" /></a></li>
									<li><a href="#"><img src="./libraries/gallery/images/thumbs/24.jpg" data-large="./libraries/gallery/images/24.jpg" alt="image24" data-description="As they did battery to the spheres intend" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
				
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

