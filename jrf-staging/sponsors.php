<html>
<head>
	<title> Sponsors </title>
	
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
				<h1> Sponsors </h1>
				
				
				<br>
<br>

<a href="http://ziggymarleyorganic.com/" target="_blank"><img src="http://www.jazzreggaefest.com/files/ziggymarleyorganicstransparent.png" style="width: 150px;"></a>

<a href="http://www.foodshouldtastegood.com" target="_blank"><img src="http://www.jazzreggaefest.com/files/foodshouldtastegoodlogotransparent.png" style="width: 150px;"></a>

<a href="http://www.cascadianfarm.com" target="_blank"><img src="http://www.jazzreggaefest.com/files/cascadianfarmlogotransparent.png" style="width: 150px;"></a>

<a href="http://stepandrepeat.com/" target="_blank"><img src="http://www.jazzreggaefest.com/files/stepandrepeatlogotransparent.png" style="width: 150px;"></a>

<a href="http://www.amoeba.com/" target="_blank"><img src="http://www.jazzreggaefest.com/files/amoebamusiclogotransparent.png" style="width: 150px;"></a>

<a href="http://americansignsinc.com/" target="_blank"><img src="http://www.jazzreggaefest.com/files/americansignslogotransparent.png" style="width: 150px;"></a>

<a href="http://www.illyissimo.com/" target="_blank"><img src="http://www.jazzreggaefest.com/files/illyissimologotransparent.png" style="width: 150px;"></a>

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
		animated: false,
    	menu: '#nav-side',
    	
	});	
	jPM.on();
</script>

<script>
    $('a:contains(Sponsors)').css("background","#00cde0");
    $('li:contains(Sponsors)').css("background","#00cde0");
</script>


<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
    
</body>


</html>

