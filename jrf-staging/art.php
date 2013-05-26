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
				<h1> Art Exhibit </h1>
				
				<div class="basic-padding">
<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/gallery/june22StudyInWatercolorVsAerosol.png">

</br>
</br>
			
JazzReggae is pleased to announce the various art exhibits and craft projects featured at this year's festival! The art exhibition is expected to be better than ever this year with dynamic art pieces and installations provided by both hip companies and local artists.
<br>
<br>

<h1>X is the Weapon</h1>
<img src="./images/art/x.png" style="width:100%">
<br>
<br>
X is the Weapon is an artist collective based in Orange County that will be featured at this year’s exhibition. Several artists will also be doing live art during both days of the festival. We hope to show process alongside final product, so you can see how these artists bring their works from start to completion.
<br>
<br>
<a href="./gallery.php?id=x">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://xistheweapon.com/">Website</a>
<br>
<br>



<h1>Sole Bicyles</h1>
<img src="./images/art/sole.png" style="width:100%">
<br>
<br>
Founded by two USC graduates and now based in Venice Beach, Sole Bicycles started with the goal of creating affordable and well-designed fixed gear bikes, but they didn’t just stop there.Sole also has a team of artists that turns selected bikes into works of art. At the festival, you will get to see these bikes alongside artists’ other works to experience the full range of art produced by theSole collective.
<br>
<br>
<a href="./gallery.php?id=sole">Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.solebicycles.com/">Website</a>
<br>
<br>

		
				
				
<h1>CanLove: "No Can Left Behind"</h1>

As part of the JazzReggae sustainable art initiative, the artists of CanLove will be at the festival to share their art and their mission. By using discarded graffiti spray cans as their primary medium, CanLove offers a creative solution to the problem of waste produced by graffiti artists. They have recycled over 10,000 cans and counting. Check out all the creative ways they manage to turn trash into art.
<br>
<br>
<a href="http://canlove.org/">Website</a>
<br>
<br>				
	

<h1>Student Art Competition</h1>
<img src="./images/art/student.png" style="width:100%">
<br>
<br>
<a href="./gallery.php?id=student">Gallery</a>
<br>
<br>


<h1>Photo Project</h1>
<img src="./images/art/photo.png" style="width:100%">
<br>
<br>
As part of our mission to make art interactive and diverse, JazzReggae launched a collaborative photo project that will be displayed as part of the exhibition this year. Contestants were given little instruction, only that their submission had to be inspired by Los Angeles, opening the project up to a range of interpretations. Winning submissions will be displayed for the first time at the festival in a collaborative collage piece.
<br>
<br>
<a href="./gallery.php?id=photo">Gallery</a>
<br>
<br>


<h1>Sustainable arts and crafts</h1>

To make the JazzReggae art exhibition as interactive and sustainable as possible, this year we have added recycled arts and crafts to the mix. Art teacher Jennifer Morgan of Sustainable Arts L.A. will have a just for kids’ arts and crafts table. All materials will be from Trash for Teachers, a company that recycles local businesses’ discarded waste to provide sustainable supplies for artists and teachers. For those of us that don’t feel too old for a little arts and crafts, we will be constructing a sculpture entirely out of recycled water bottles that you can help paint!
<br>
<br>

				
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

