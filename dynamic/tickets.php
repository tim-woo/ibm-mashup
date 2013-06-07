<html>
<head>
	<title> Tickets </title>
	
	<link rel="shortcut icon" href="http://www.jazzreggaefest.com/files/Screen%20shot%202013-02-02%20at%208.32.06%20PM.png" type="image/png">
	
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
				<h1> Tickets </h1>
				
				
				<div class="basic-padding">
				
				<a href="http://www.ticketmaster.com/JazzReggae-Festival-UCLA-tickets/artist/870795"><img src="./images/home/tickets.png" width="500px"></a>
				<br>
				<br>
				<a href="http://www.ticketmaster.com/JazzReggae-Festival-UCLA-tickets/artist/870795"><img src="./images/home/ticketsdeluxe.png" width="500px"></a>
				<br>
				<br>
				This Memorial Day Weekend, the JazzReggae Festival is kicking off the summer with a lineup of incredible performers.Tickets are available at <a href="http://www.ticketmaster.com/JazzReggae-Festival-UCLA-tickets/artist/870795" target="_blank">ticketmaster.com</a> at the Central Ticket Office at UCLA, and Amoeba Music.
				<br>
				Single day passes are available to the general public, as well as weekend packages. Be sure to get your tickets before they are all gone!
				<br>
				<br>
				
				<h1>Locations</h1>
				
				UCLA Central Ticket Office 
				<br>
				Address: 325 Westwood Plz Ste 100, Los Angeles, CA 90024
				Phone: (310) 825-2101
				Hours: Mon-Fri 10 am- 4 pm
				<br>
				<br>
				Amoeba Music
				<br>
				Address: 6400 W Sunset Blvd, Los Angeles, CA 90028 
				Phone: (323) 245-6400
				Hours: 10:30 am–11:00 pm
				<a href="http://www.amoeba.com">http://www.amoeba.com</a>
				<br>
				<br>
				Bombass Muzik
				<br>
				Address: 203 E. Vernon Ave, Los Angeles, CA 90011
				Phone: (323) 233-0400
				<a href="http://www.bombassmuzik.com">http://www.bombassmuzik.com</a>
				<br>
				<br>
				Stone's Grocery & Market
				<br>
				Address: 6700 Crenshaw Blvd, Los Angeles, CA 90043
				Phone: (323)751-5526
				<br>
				<br>
				Natraliart Jamaican Restaurant
				<br>
				Address: 3426 W. Washington Blvd., Los Angeles, CA 90018
				Phone: (323) 737-9277
				Hours: 11 am–9 pm
				<a href="http://www.natraliart.com">http://www.natraliart.com</a>
				<br>
				<br>
				<h1>Students</h1>
				UCLA Students, Staff and Faculty! This year, there is a brand new limited student ticket price of $25. Tickets at this discounted student price are limited and are only available at the CTO upon presentation of a current and valid Bruin Card. The STUDENT TICKET GIVEAWAY will be on May 14th this year and a limited amount of students will recieve FREE TICKETS TO BOTH DAYS upon presentation of a current and valid Bruin Card!
				<br>
				<br>
				<h1>Deluxe</h1>
				Deluxe packages are now available on Ticketmaster for the 2013 JazzReggae Festival weekend as well! For only $65 a day, the deluxepackage includes complete access to the festival, a gift bag, two free meals, and a prime and shaded location to enjoy the music from! Check out Ticketmaster to buy your deluxe package and enjoy the sunny Memorial Day weekend in style at the 27th Anniversary of the JazzReggae Festival.
				
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
    $('a:contains(Tickets)').css("background","#00cde0");
    $('li:contains(Tickets)').css("background","#00cde0");
</script>

<script type="text/javascript">
function triggerMenu()
{
	jPM.trigger(true);
}
</script>
    
</body>


</html>

