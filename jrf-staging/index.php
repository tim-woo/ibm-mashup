<?php $page="index" ?>

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
				<div class="slide-show">
					<ul class="rslides" id="slider1">
  						<li class="rslides-element"><img src="./images/slide_santigold.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slide_ziggy.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slide_design.png" alt=""></li>
  						<li class="rslides-element"><img src="./images/slide_stage.png" alt=""></li>
					</ul>
				</div>
	
				<div class="dummy-content">
					<div style="width:60%;float:left;">
						<h1>Event Flyer</h1>
						<img src="./images/flyer.jpg">
						
					</div> <!-- end left column -->
					
					<div style="width:40%; float:right;">
						<h3>Paragraph Element</h3>
						<p>
						Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.
						</p>
						<p>
						Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.
						</p>
						<h3>Another Heading Starting Point</h3>
						<p>
						Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.
						</p>
						<p>
						Quisque pellentesque sodales aliquam. Morbi mollis neque eget arcu egestas non ultrices neque volutpat. Nam at nunc lectus, id vulputate purus. In et turpis ac mauris viverra iaculis. Cras sed elit a purus ultrices iaculis eget sit amet dolor. Praesent ac libero dolor, id viverra libero. Mauris aliquam nibh vitae eros sodales fermentum. Fusce cursus est varius ante vehicula eget ultrices felis eleifend. Nunc pharetra rutrum nibh et lobortis. Morbi vitae venenatis velit.
						</p>
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

<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
    
</body>
	
	
</html>

