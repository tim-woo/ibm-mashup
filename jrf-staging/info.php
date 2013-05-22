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
				<h1> Info </h1>
				
				<h4>405 Hilgard Avenue | Los Angeles, CA 90025</h4>
				
				<h2 class="entry-title">Parking</h2>
				
				<p>UCLA PARKING aims to make parking at UCLA as convenient as possible for all our campus visitors, with over 50 surface lots and multi-level parking structures located throughout the campus. Vehicles parked in a non-metered UCLA lot or structure must display the valid permit. These permits indicate where and when the permit holder is authorized to park. Finding the right location to park will largely depend on space availability and authorization to park in specific parking area. Please refer to the campus-parking map to find the closest open Information &amp; Parking Booth.</p>
				
				<h2>Parking Pay Stations</h2>
				
				<p>Pay stations allow you to select the time you need to spend on campus and pay accordingly (all-day passes can also be purchased). Parking Pay Stations accept $1 and $5 dollar bills, as well as VISA and Master Card credit cards.</p>
				
				<h2>Daily Permits</h2>
				
				<p>Visitors may purchase daily parking permits ($11 per vehicle) by stopping by any of the 11 Information &amp; Parking booths conveniently located throughout campus.</p>
				
				<h2>Accommodations</h2>
				
				<p>Coming from out of town? Spend the night close to the festival!</p>
				
				<p>
				<a class="postlink" href="http://www.jdvhotels.com/hotels/losangeles/angeleno" target="_blank">Hotel Angeleno</a><br>
				170 N. Church Lane<br>
				Los Angeles, CA 90049<br>
				310.476.6411
				</p>
				
				<h2>Public Transportation</h2>
				
				<p>
				<a class="postlink" href="http://www.metro.net/" target="_blank">MTA Lines</a> 2, 21, 302, 305 and 761 serve campus, or transfer from other MTA lines<br>
				<a href="http://bigbluebus.com/" target="_blank">Santa Monica Big Blue Bus Lines</a> 1, 2, 3, 8 and 12 bring you to campus, or transfer from other lines.<br>
				<a href="http://www.culvercity.org/depts_bus.asp" target="_blank">Culver City Bus Line</a> 6 brings you directly to campus, or transfer from Lines 1-5<br>
				<a href="http://socaltransport.org/tm_pub_start.php" target="_blank">This Trip Planner</a> works for all 3 lines and can tell you what bus to take to get to UCLA from any location at any hour.
				</p>
				
				
				
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

