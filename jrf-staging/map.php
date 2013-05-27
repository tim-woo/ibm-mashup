<html>
<head>
	<title> Map </title>
	
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
	
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.css" />
 	<!--[if lte IE 8]>
     	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5/leaflet.ie.css" />
 	<![endif]-->
 	
 	<script>
 		var isMobile = {
    		Android: function() {
        		return navigator.userAgent.match(/Android/i);
   			},
   		 	BlackBerry: function() {
        		return navigator.userAgent.match(/BlackBerry/i);
    		},
    		iOS: function() {
        		return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    		},
    		Opera: function() {
        		return navigator.userAgent.match(/Opera Mini/i);
    		},
    		Windows: function() {
        		return navigator.userAgent.match(/IEMobile/i);
    		},
    		any: function() {
        		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    		}
		};
		
 	</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41238300-1', 'jazzreggaefest.com');
  ga('send', 'pageview');

</script>

<style media="screen" type="text/css">

#page {
margin-bottom: 0px;
}

.leaflet-control-container {
	display:none;
	}
	
@media screen and (min-width: 540px)
{

	.leaflet-control-container {
	display:block;
	}
}

</style>

</head>

<body>

	<div class="menu-trigger"><a href="javascript:triggerMenu();">Menu</a></div>
	<div class="side-strip"></div>
	
	
	<div id="full-view">
	<div id="wrapper">
	
		<div id="page">
		
			
			<?php /*include('./includes/header.php');*/ ?>
			
			<?php include('./includes/nav.php'); ?>
			<?php include('./includes/nav-side.php'); ?>
			
			
			<!-- Variable Content Goes Here -->
			<div id="content">
				<div id="map"></div>
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

<script src="http://cdn.leafletjs.com/leaflet-0.5/leaflet.js"></script>
	<script>

		var map = L.map('map').setView([34.072089, -118.446865], 17);

		
		L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>'
		}).addTo(map);


		var imageUrl = './images/map/map-transparent.png',
    	imageBounds = [[34.071120, -118.447616], [34.073196, -118.446103]];

		L.imageOverlay(imageUrl, imageBounds).addTo(map);

		/*var drakeIcon = L.icon({
    		iconUrl: './images/map/drake-icon.png',

    		iconSize:     [74, 98], // size of the icon
    		iconAnchor:   [37, 0], // point of the icon which will correspond to marker's location
    		popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAnchor
		});

		var marker = L.marker([34.072433, -118.448592], {icon: drakeIcon}).addTo(map);
		marker.bindPopup("<b>Hello world!</b><br>This is Drake Stadium.");*/
		
		function onLocationFound(e) {
    		var radius = e.accuracy / 2;

    		//L.marker(e.latlng).addTo(map).bindPopup("You are within " + radius + " meters from this point").openPopup();

			L.marker(e.latlng).addTo(map)

    		L.circle(e.latlng, radius).addTo(map);
		}

		map.on('locationfound', onLocationFound);
		
		function onLocationError(e) {
    		alert(e.message);
		}

		map.on('locationerror', onLocationError);
		
		if( isMobile.any() )
		{
			map.locate();
		}
		

	</script>
	
	<script>
    $('a:contains(Map)').css("background","#00cde0");
    $('li:contains(Map)').css("background","#00cde0");
</script>
	
	<script>
		
		console.log($(document).outerHeight());
		console.log($('#header').outerHeight());
		console.log($(document).outerHeight()  - $('#header').outerHeight());
		
		var mapheight = $(document).outerHeight()  - $('#header').outerHeight();
		

    $('#map').css({
        height: mapheight
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

