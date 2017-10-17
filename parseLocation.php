<html lang="en">
<head>
<title>uhack</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Medico Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkYyww2h45DFdLBZfAaFIop8vYquismHw&callback=initMap">
    </script>
<script type="text/javascript">
	var map;
	
	function geolocation(){
		if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}
    function showPosition(position) {
    	var x=position.coords.latitude;
    	var y=position.coords.longitude;
    console.log( "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude);
    
	}
	 
     </script>
</head>



<?php
	if($_POST['emergency']){
		$emergencyType = json_decode('emergency');
	}
?>