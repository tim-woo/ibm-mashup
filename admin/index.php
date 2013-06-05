<html>
<head>
	<title> ARTIST MASHUP </title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	
	<!-- 
	<link rel="shortcut icon" href="http://www.jazzreggaefest.com/files/Screen%20shot%202013-02-02%20at%208.32.06%20PM.png" type="image/png">
	-->
	
	<!-- Including the most recent JQuery Library -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<!--Including Image Picker library-->
	<link rel="stylesheet" href="./libraries/image-picker/image-picker.css"/>
	<script type="text/javascript" src="./libraries/image-picker/image-picker.js"></script>
	
	<!--Including Masonry library-->
	<script src="./libraries/masonry/jquery.masonry.min.js"></script>
	
	<!--Including our CSS file-->
	<link rel="stylesheet" href="./css/admin.css"/>
	
</head>


<body>

<div id="page">

<h1> ARTIST MASHUP </h1>

<h2> Artist Name </h2>
Artist name:  <input type="text" name="searchName" id="searchName">
<input type="button" onclick="getAjaxResponse('artistNames')" value="Search Artist">

<div id="myDiv"></div>

</div>

<script>

// Convinience function to log any message to the browsers debugging console
function log(msg) {
    setTimeout(function() {
        throw new Error(msg);
    }, 0);
}

// This function is called when the biography drop down meny is changed
// Currently not working
$('#artistBiographies').change(function() {

    var val = $("#artistBiographies option:selected").val();
    
    log(val);
    
    if(val == "wikipedia")
    	$("#biography").html("Wikipedia Biography");
    else
    	$("#biography").html("Quincy Matthew Hanley (born October 26, 1986), better known by his stage name ScHoolboy Q is an American recording hip hop artist from Los Angeles, California. Hanley is signed to Top Dawg Entertainment and is a member of Black Hippy along with Jay Rock, Kendrick Lamar and Ab-Soul. In 2008, ScHoolboy Q released his first mixtape titled, Schoolboy Turned Hustla and followed up in 2009 with Gangsta & Soul. In 2011, he finally released his first album titled, Setbacks  Dividing his time between socially conscious rap and bud smoker's anthems, ScHoolboy Q makes quite the impression on his debut \"street album\": the polished, funky, well-balanced, and rewarding Setbacks. Think Mos Def meets Murs on an especially hazy, West Coast weekend and you've got the idea, but this ScHoolboy offers some unique ideas on top of it. He's a complex, mature young man who worries about his kids consuming too much fast food (the straight forward \"Figg Get Da Money\") but he's also a dude who can't help letting go, diving headfirst into a bong when work is done (the dreamlike \"Light Years Ahead\"). \"What's the Word\" with fellow Black Hippy member Jay Rock, is a radio-friendly number that deserves a lavish party video while the following \"iBETiGOTSUMWEED\" is the kind of looped, scratchy soul the Madlib and Stones Throw crowd crave. Talented on either end of the spectrum, ScHoolboy Q delivers both with the same skill and cool head, all while keeping his own identity up front. Setbacks wants to come off as just slightly more important than a mixtape, but this casual release is a big contribution to the \"true hip-hop\" movement.");
});

// Dynamic version of above function
$(document).on('change', '#artistBiographies', function() {
    
    var val = $("#artistBiographies option:selected").val();
    
    log(val);
    
    $("#biography").html(window.artistBiographies[val].text);
    
});

// This updates the image selector element
function updateImages()
{
	// This converts the image selector from text drop down to image grid
	$("select.image-picker").imagepicker();

	// This cleans up the image grid using the masonry library
	var container = jQuery("select.image-picker.masonry").next("ul.thumbnails");
    container.imagesLoaded(function(){ 
      container.masonry({ 
        itemSelector:   "li",
      }); 
    });
}
</script>

<script>

// Adds a div with specified ID and inner HTML to the page
function appendDiv(divId, inner)
{
	// Creare a new div and set the ID based on the parameter
	var newDiv = document.createElement('div');
    newDiv.id = divId;
    
    // Set the inner HTML of the div according to the parameter
    newDiv.innerHTML = inner;
    
    // Append the new div to the existing HTML element with id=page
	$('#page').append(newDiv);
    
    // The updateImages() function must be called to display image selector
    if(divId == "artistImages")
    	updateImages();
    
    // This trick auto scrolls to the bottom of the page
    $(window).scrollTop($(document).height());
}

// Given one of our predefined request types, this requests the data,
// and calls the appropriate function to parse and add the data to the web page
function getAjaxResponse(request)
{
	// Create a Ajax request depending on browser
	var xmlhttp;
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
  
  	// Define the function to be called when response is received
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{	
    		// Create a JSON object from the server response
    		var object = JSON.parse(xmlhttp.responseText);
    		
    		// Initialize a string to contain the HTML we're creating 
    		var innerHTML = "";
    		
    		// Parse the JSON object depending on the request's required format
    		if(request == "artistNames")
    			innerHTML = parseArtistNames(object);
    		else if(request == "artistImages")
    			innerHTML = parseArtistImages(object);
    		else if(request == "artistBiographies")
    			innerHTML = parseArtistBiographies(object);
    		else if(request == "artistVideos")
    			innerHTML = parseArtistVideos(object);
    		else if(request == "artistSongs")
    			innerHTML = parseArtistSongs(object);
    		else if(request == "artistNews")
    			innerHTML = parseArtistNews(object);
    		else if(request == "artistTwitter")
    			innerHTML = parseArtistTwitter(object);

			// Call function to create a div with this HTML and append to document
    		appendDiv(request, innerHTML);
    	}
	}
	
	// Create the AJAX call to our server depending on the specified request
	if(request == "artistNames")
	{
		// getArtistNames?search=Schoolboy+Q
		// Send a request to the server. Provide the text artist name, select from the name form
		// Get back a json object with names and id's
		
		// Pass parameter from name form: 
		var searchName = document.getElementById('searchName').value;
		log(searchName);
		
    	xmlhttp.open("GET","./json/artistNames.json",true);
    }
    else if(request == "artistImages")
    {
    	// getArtistImages?id=ARREQCK1269FB2EE5C
		// Send a request to the server, provide artist ID, from select form
		// Get back a json with the urls
		
		// Pass name parameter from selected dropdown
		var select = document.getElementById("artistName");
		var artistName = select.options[select.selectedIndex].text;
		log(artistName);
		
    	xmlhttp.open("GET","./json/artistImages.json",true);
    }
    else if(request == "artistBiographies")
    {
    	// getArtistBiographies?id=ARREQCK1269FB2EE5C
		// Send a request to the server, provide artist ID, from select form
		// Get back a json with the text and source site
		
		// Pass id parameter from selected dropdown
		var select = document.getElementById("artistName");
		var artistId = select.options[select.selectedIndex].value;
		log(artistId);
		
    	xmlhttp.open("GET","./json/artistBiographies.json",true);
    }
    else if(request == "artistVideos")
    {
    	// getArtistVideos?name=Schoolboy+Q
		// Send a request to the server, provide artist name, from select form
		// Get back a json with the urls and source site
		
		// Pass name parameter from selected dropdown
		var select = document.getElementById("artistName");
		var artistName = select.options[select.selectedIndex].text;
		log(artistName);
		
    	xmlhttp.open("GET","./json/artistVideos.json",true);
    }
    else if(request == "artistSongs")
    {
    	// getArtistSongs?name=Schoolboy+Q
		// Send a request to the server, provide artist name, from select form
		// Get back a json with the urls and source site
		
		// Pass name parameter from selected dropdown
		var select = document.getElementById("artistName");
		var artistName = select.options[select.selectedIndex].text;
		log(artistName);
		
    	xmlhttp.open("GET","./json/artistSongs.json",true);
    }
    else if(request == "artistNews")
    {
    	// getArtistNews?id=ARREQCK1269FB2EE5C
		// Send a request to the server, provide artist ID, from select form
		// Get back a json with the title, URL
		
		// Pass id parameter from selected dropdown
		var select = document.getElementById("artistName");
		var artistId = select.options[select.selectedIndex].value;
		log(artistId);
		
    	xmlhttp.open("GET","./json/artistNews.json",true);
    }
    else if(request == "artistTwitter")
    {
    	// getArtistTweets?id=ARREQCK1269FB2EE5C
		// Send a request to the server, provide artist ID, from select form
		// Get back a json with the tweet text, time, url
    	xmlhttp.open("GET","./json/artistTwitter.json",true);
    }
	
	// Send the AJAX request, when it's complete, the above function handles the response
	xmlhttp.send();
}

function parseArtistNames(jsonObject) {

    var innerHTML = 'Find the correct name from the list below and click "Select Artist" to continue.<br>';
    innerHTML += '<select name="artistName" id="artistName">';
    
    var artistNames = jsonObject.names;		
    for(var i = 0; i < artistNames.length; i++)
	{
		innerHTML += '<option value="';
		innerHTML += artistNames[i].id;
		innerHTML += '">';
		innerHTML += artistNames[i].name;
		innerHTML += '</option>';
	}
	
	innerHTML += '</select>';
	
	innerHTML += '<input type="submit" onclick="getAjaxResponse(\'artistImages\')" name="selectArtist" value="Select Artist">';

	return innerHTML;
}

function parseArtistImages(jsonObject) {

    var innerHTML = '<h2> Artist Images </h2>';
	innerHTML += 'Choose your favorite image below and click "Select Image" to continue.';
	innerHTML += '<select class="image-picker masonry" id="image-picker">';
	
	var artistImages = jsonObject.images;		
    for(var i = 0; i < artistImages.length; i++)
	{
		innerHTML += '<option data-img-src="';
		innerHTML += artistImages[i].url;
		innerHTML += '" value="';
		innerHTML += artistImages[i].url;
		innerHTML += '"></option>';
	}
	
  	innerHTML += '</select>';
	innerHTML += '<br>';
	innerHTML += '<input type="submit" onclick="getAjaxResponse(\'artistBiographies\')" name="selectImage" value="Select Image">';
   
    return innerHTML;
}

function parseArtistBiographies(jsonObject) {

    var innerHTML = '<h2> Artist Biography </h2>';
	innerHTML += 'Choose a biography: ';
	innerHTML += '<select id="artistBios" name="artistBiographies">';
	
	
	window.artistBiographies = jsonObject.biographies;	
    for(var i = 0; i < window.artistBiographies.length; i++)
	{
		innerHTML += '<option value="';
		innerHTML += i;
		innerHTML += '">';
		innerHTML += window.artistBiographies[i].site; // TODO capitalize first letter
		innerHTML += '</option>';
	}
  	
	innerHTML += '</select>';
	innerHTML += '<br><br>';
	innerHTML += '<div id="biography">';
	innerHTML += window.artistBiographies[0].text; // TODO check for no entries
	innerHTML += '</div>';
	innerHTML += '<br>';
	
	innerHTML += '<input type="submit" onclick="getAjaxResponse(\'artistVideos\')" name="selectBiography" value="Select Biography">';

	return innerHTML;
}

function parseArtistVideos(jsonObject) {

    var innerHTML = '<h2> Artist Videos </h2>';
	innerHTML += '<div id="video-container">';
	
	
	window.artistVideos = jsonObject.videos;	
    for(var i = 0; i < window.artistVideos.length; i++)
	{
		if(artistVideos[i].site == "youtube")
		{	
			// innerHTML += '<iframe width="560" height="315" src="http://www.youtube.com/embed/KnnYiW5dnhQ" frameborder="0" allowfullscreen></iframe>';
			// innerHTML += '<input type="checkbox" name="option1" value="Milk">';
	
			innerHTML += '<iframe width="560" height="315" src="http://www.youtube.com/embed/';
			innerHTML += window.artistVideos[i].url;
			innerHTML += '" frameborder="0" allowfullscreen></iframe>';
			
			innerHTML += '<input type="checkbox" name="video';
			innerHTML += i;
			innerHTML += '" id="video';
			innerHTML += i;
			innerHTML += '" value="';
			innerHTML += window.artistVideos[i].url;
			innerHTML += '">';
			
			innerHTML += '<br>';
		}
		else if(window.artistVideos[i].site == "vimeo")
		{
		}
		
	}
	
	innerHTML += '</div>';
	innerHTML += '<br>';
	innerHTML += '<input type="submit" onclick="getAjaxResponse(\'artistSongs\')" name="selectVideos" value="Select Videos">';
    
    return innerHTML;
}

function parseArtistSongs(jsonObject) {

    var innerHTML = '<h2> Artist Songs </h2>';
    
	innerHTML += '<div id="song-container">';
	
	
	
	window.artistSongs = jsonObject.songs;	
    for(var i = 0; i < artistSongs.length; i++)
	{
		if(window.artistSongs[i].site == "soundcloud")
		{	
			innerHTML += '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F';
			innerHTML += window.artistSongs[i].url;
			innerHTML += '"></iframe>';
			
			innerHTML += '<input type="checkbox" name="song';
			innerHTML += i;
			innerHTML += '" id="song';
			innerHTML += i;
			innerHTML += '" value="';
			innerHTML += window.artistSongs[i].url;
			innerHTML += '">';
			
			innerHTML += '<br><br>';
		}
		else if(window.artistSongs[i].site == "spotify")
		{
		}
		
	}
	
	innerHTML += '</div>';
	innerHTML += '<br>';
	innerHTML += '<input type="submit" onclick="getAjaxResponse(\'artistNews\')" name="selectSongs" value="Select Songs">';

	return innerHTML;
}

function parseArtistNews(jsonObject) {

	var innerHTML = '<h2> Artist News </h2>';
    
	innerHTML += 'Check the box below if you would like to include a stream of the artists most recent news items: ';
	innerHTML += '<br><br>';
	innerHTML += '<div id="news-container">';
	
	
	
	var artistNews = jsonObject.news;	
    for(var i = 0; i < artistNews.length; i++)
	{
		innerHTML += '<a href="';
		innerHTML += artistNews[i].url;
		innerHTML += '">';
		innerHTML += artistNews[i].title; 
		innerHTML += '</a>';
		
		innerHTML += '<br>';
	}
	
	
	innerHTML += '</div>';
	innerHTML += '<br>';
	innerHTML += 'Include News stream <input type="checkbox" name="newsCheckbox" id="newsCheckbox">';
	innerHTML += '<br>';
	innerHTML += '<input type="submit" onclick="getAjaxResponse(\'artistTwitter\')" name="newsContinue" value="Continue">';
	
	return innerHTML;
}

function parseArtistTwitter(jsonObject) {

	var innerHTML = '<h2> Artist Twitter </h2>';
    
	innerHTML += 'Check the box below if you would like to include the artist\'s Twitter stream:';
	innerHTML += '<br>';
	innerHTML += '<a class="twitter-timeline" href="https://twitter.com/ScHoolBoyQ" data-widget-id="340935679490023425">Tweets by @ScHoolBoyQ</a>';
	innerHTML += '<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");<\/script>';
	innerHTML += '<br>';
	innerHTML += '<br>';
	innerHTML += 'Include Twitter stream <input type="checkbox" name="twitterCheckbox" id="twitterCheckbox">';
	innerHTML += '<br>';

	innerHTML += '<br><br><br>';


	innerHTML += '<input type="submit" onclick="artistMashup()" value="Create Mashup">';
			
			
	return innerHTML;
}

function artistMashup() 
{
	url = "./artist.php?"
	
	url += "artistName="
	var select = document.getElementById("artistName");
	var artistName = select.options[select.selectedIndex].text;
	log(artistName);
	url += artistName;
	
	url += "&artistId="
	var artistId = select.options[select.selectedIndex].value;
	log(artistId);
	url += artistId;
	
	url += "&artistImage="
	var imageSelect = document.getElementById("image-picker");
	var artistImage = imageSelect.options[imageSelect.selectedIndex].value;
	log(artistImage);
	url += artistImage;
	
	// bio source
	url += "&artistBio=" 
	var bioSelect = document.getElementById("artistBios");
	var artistBioSource = bioSelect.options[bioSelect.selectedIndex].text;
	log(artistBioSource);
	url += artistBioSource;
	
	// artist video
    for(var i = 0; i < window.artistVideos.length; i++)  
    {
    	if(document.getElementById("video"+i).checked)
    	{	
    		var checkbox = document.getElementById("video"+i);
    		url += "&v[]="
    		url += checkbox.value;
    	}
    }
	
	// artist song
    for(var i = 0; i < window.artistSongs.length; i++)  
    {
    	if(document.getElementById("song"+i).checked)
    	{	
    		var checkbox = document.getElementById("song"+i);
    		url += "&s[]="
    		url += checkbox.value;
    	}
    }
    
	// news yes/no
	url += "&artistNews=";
	if(document.getElementById('newsCheckbox').checked)
		url += "true";
	else
		url += "false";
	
	// twitter yes/no
	url += "&artistTwitter=";
	if(document.getElementById('newsCheckbox').checked)
		url += "true";
	else
		url += "false";
	
	var win=window.open(url, '_blank');
  	win.focus();
}

</script>


</body>


</html>


