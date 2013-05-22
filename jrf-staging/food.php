<html>
<head>
	<title> MyVent Template Container </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<!-- Include the slide show CSS -->
	<link rel="stylesheet" href="./libraries/responsiveslides/responsiveslides.css"/>
	
	<!-- Including flipper CSS -->
	<link rel="stylesheet" href="./css/card-flipper.css"/>
	
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
				<h1> Food Vendors</h1>
				
				<img alt="Vendors at the 25th Annual JazzReggae Festival " src="./images/food/food_primary.png" >
    				</br>
    				</br>
    
    				Just a taste of one of the many distinguished food choices available at JazzReggae will excite your palate and leave you wanting to try more. The 2013 festival will present a variety of food vendors that will serve to complement and celebrate the diversity of our music, crowd, and activities. This includes a large, mouth-watering spectrum of food vendors selling Thai, Jamaican, and Caribbean cuisines to name only a few. In addition, almost all of the cooking methods and utensils used at the festival are sustainable, promoting a green-friendly environment. Every year the producers of JazzReggae Fest hand-pick their featured food vendors in order to showcase the most delectable, diverse and enjoyable grub around!
				
    				</br>
    				
				
				<div class="grid-flip-container">
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/alex.png">
							</div>
							<div class="back">
								<div class="vendor-info">Exotic, full flavored, and filling as well, Alex Ethiopian food is the best meal for those wishing to broaden their horizons. See what you’ve been missing!</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/auntie.png">
							</div>
							<div class="back">
								<div class="vendor-info">Jamaican dishes renowned for their delicious quality and tender meats. Try Auntie P’s to satisfy those coastal cravings!</div>	
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/barrets.png">
							</div>
							<div class="back">
								<div class="vendor-info">Barretts Lemonade is a perfect companion for hot summer days and exciting live festivals!</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/california.png">
							</div>
							<div class="back">
								<div class="vendor-info">Cool off on those hot days with the most delicious shaved ice in town at California Snow.</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/chow.png">
							</div>
							<div class="back">
								<div class="vendor-info">Huge servings of delicious noodle dishes, but our specialty Chow Mein is not something to ever miss.</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/derricks.png">
							</div>
							<div class="back">
								<div class="vendor-info">Succulent Jamaican chicken, pork, and more cooked right on site, we bring you to full flavor of the island.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://www.derricksjamaican.com/">Website</a></div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/dippin.png">
							</div>
							<div class="back">
								<div class="vendor-info">Enjoy chicken cooked to your liking and a big selection of dipping sauces for any taste</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/dubble.png">
							</div>
							<div class="back">
								<div class="vendor-info">Enjoy two creamy scoops of homemade ice cream, perfect as a summertime confection</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/hawkins.png">
							</div>
							<div class="back">
								<div class="vendor-info">Hawkins House of Burgers is not only “The Best Burger in Los Angeles”, but also boasts the biggest burrito in Los Angeles as well, and they always make eating a joy.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://hawkinsburgers.com/">Website</a></div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/irie.png">
							</div>
							<div class="back">
								<div class="vendor-info">Famous for their Jamaican food but especially their Jamaican patty, Irie Choice is the ideal choice for those wishing to experience Jamaican cuisine between two buns.</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/island.png">
							</div>
							<div class="back">
								<div class="vendor-info">We fuse Japanese and Hawaiian cuisine into a one of a kind dining experience!</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://islandgrilllosalamitos.com/index.htm">Website</a></div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/joes.png">
							</div>
							<div class="back">
								<div class="vendor-info">Jamaican food fresh from the tropical beaches</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/kamils.png">
							</div>
							<div class="back">
								<div class="vendor-info">Kamil's International Food offers an array of Greek cuisine, including Kababs, Greek Salads, homemade hummus, and much more</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/kobbler.png">
							</div>
							<div class="back">
								<div class="vendor-info">We are the only Jamaican restaurant in Los Angeles that combines authentic, traditional Jamaican flavors with healthy vegetarian alternatives that satisfy the taste buds.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://www.natraliart.com/index.html">Website</a></div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/mediterranean.png">
							</div>
							<div class="back">
								<div class="vendor-info">Try our succulent and flavorful chicken, our tender, mouth watering beef, or our soft and delightful Gyros.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://www.mediterraneandelight3.com/">Website</a></div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/mrs.png">
							</div>
							<div class="back">
								<div class="vendor-info">Mrs. C Kitchen is your cake specialty shop, ranging from the traditional festival funnel cake to the unique and delicious Thai Cake!</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/natraliart.png">
							</div>
							<div class="back">
								<div class="vendor-info">We are the only Jamaican restaurant in Los Angeles that combines authentic, traditional Jamaican flavors with healthy vegetarian alternatives that satisfy the taste buds.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://www.natraliart.com/index.html">Website</a></div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/patties.png">
							</div>
							<div class="back">
								<div class="vendor-info">At PattiesXpress you will find everything from Jamaican Gourmet to American Cuisine. We prepare gourmet meals using the finest herbs and spices, serving each dish with perfection just the way you like it.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://pattiesxpress.com/users/awp.php?ln=711930">Website</a></div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/philly.png">
							</div>
							<div class="back">
								<div class="vendor-info">Philly Ice Brings you the finest Shaved Ice in Los Angeles, with a huge choice of flavors, and a sweet joy that will surely bring you back.</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/sr.png">
							</div>
							<div class="back">
								<div class="vendor-info">Traditional Thai and Chinese dishes come together to bring bold oriental flavor and unique dishes which will leave you wanting more</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/shabazz.png">
							</div>
							<div class="back">
								<div class="vendor-info">Catch the taste of the ocean at Shabazz, known across all waters for their famous catches of catfish, salmon, snapper, and more!</div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/shilo.png">
							</div>
							<div class="back">
								<div class="vendor-info">Quench your thirst a experience the taste of the tropics at Shilo Smoothies</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://www.socalaloha.com/">Website</a></div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/stones.png">
							</div>
							<div class="back">
								<div class="vendor-info">Stones &amp; Jamaican Restaurant is where you can find great Jamaican food available for delivery or takeout.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://stonesandchins.eat24hour.com/">Website</a></div>
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/strictly.png">
							</div>
							<div class="back">
								<div class="vendor-info">Strictly Vegan offers the best of vegetarian and vegan wraps and bowls in Los Angeles</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://strictly-vegan.com/menu/">Website</a></div>	
							</div>
						</div>
					</div>
				</div> 
				
				<div class="grid-img-flip">
					<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="http://www.jazzreggaefest.com/sites/all/themes/jazzreggae2012/images/vendors/sweet.png">
							</div>
							<div class="back">
								<div class="vendor-info">Between Funnel Cakes, Burgers, Smoothies, and Fries, and more, The Sweet Stop has you covered for any festival fare you could ever want.</div>
								<div class="vendor-link" style="text-align: center"><a target="_blank" href="http://www.thesweetstops.com/index.html">Website</a></div>
							</div>
						</div>
					</div>
				</div> 
				
				
				
				
				<div class="spacer" style="clear: both;"></div>
				
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

