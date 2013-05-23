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
				<h1> Arts Exhibit </h1>
JazzReggae is pleased to announce the various art exhibits and craft projects featured at this year’s festival! The art exhibition is expected to be better than ever this year with dynamic art pieces and installations provided by both hip companies and local artists.
<br>
<br>
The art exhibit will continue the thread of sustainability that is largely apparent throughout the entire festival with the use of eco-friendly paints and recycled canvases. With the expertise of the JRF Sustainability crew, we will also feature a colorful and vibrant installation made from recycled materials. As we believe that green living can be beautiful, there will also be an eco- friendly craft station featuring kid-focused projects and activities. Further, there will be a large- scale chalkboard on which visitors can voice their green initiative in an artistic and creative way.
<br>
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
    
</body>


</html>

