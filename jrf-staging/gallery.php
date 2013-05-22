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
				<h1> Gallery </h1>
				
				<center><div id="cincopa_widget_6d2a99be-5dff-492f-8bd8-f379bfdee197"><img src="//www.cincopa.com/media-platform/runtime/loading.gif" style="border:0;" width="700" /><a href="//www.cincopa.com/media-platform/wordpress-plugin.aspx"><img alt="WordPress plugin" border="0" src="http://www.cincopa.com/media-platform/runtime/cincopaicons.gif" style="border:0;" /></a></div><script src='//www.cincopa.com/media-platform/runtime/libasync.js' type='text/javascript'></script><script type='text/javascript'>cp_load_widget('AECACFbmx99n', 'cincopa_widget_6d2a99be-5dff-492f-8bd8-f379bfdee197');</script><noscript>Click <a href='http://www.cincopa.com/media-platform/view.aspx?fid=AECACFbmx99n'>here</a> to open the gallery.<br>
Powered by Cincopa <a href='http://www.cincopa.com/media-platform'>Media Platform</a> for your website and Cincopa MediaSend for <a href='http://www.cincopa.com/mediasend/start.aspx'>file transfer</a>.
</noscript></center>
				
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

