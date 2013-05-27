<html>
<head>
	<title> Set Current Artist </title>
	
	<link rel="shortcut icon" href="http://www.jazzreggaefest.com/files/Screen%20shot%202013-02-02%20at%208.32.06%20PM.png" type="image/png">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
</head>

<body>

<h1>Current Artist</h1>
<form action="http://ec2-23-22-104-155.compute-1.amazonaws.com/event/currentartist" method="post">
	
	Event ID: <input type="number" name="eventID" value="2">
	<br>
	<br>
	Artist: <select name="artistID">
		<option value="13">Kes the Band</option>
		<option value="12">Marcia Griffiths</option>
		<option value="11">Mr. Vegas</option>
		<option value="10">Barrington Levy</option>
		<option value="9">Ziggy Marley</option>
	</select>
	<br>
	<br>	
	Username: <input type="text" name="un" value="JRF">
	<br>
	<br>
	Password: <input type="password" name="pw">
	<br>
	<br>
	<input type="submit" value="Go">
</form>
 
    
</body>


</html>

