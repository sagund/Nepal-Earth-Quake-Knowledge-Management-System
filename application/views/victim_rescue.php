<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nepal Earthquake 2015 KMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--<link href="../../assets/css/portfolio-item.css" rel="stylesheet">-->
    <!--<link href="../../assets/css/custom.css" rel="stylesheet">-->

 
   
   <!--Start of assets for GMap-->  
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
        
    <style>
		#locationField, #controls {
			position: relative;
		}
      	#autocomplete {
        	position: absolute;
        	top: 0px;
        	left: 0px;
        	width: 99%;
      	}
		#map_info {
			display: none;
		}
		
		#infoPanel {
			display: none;
		}
		#myLoc {
			display:none;
		}
    </style>
    <!--End of assets for GMap-->
    
    <!-- jQuery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <!--<script src="../../assets/js/custom.js"></script>-->

</head>

<body onLoad="initialize()">

 <!-- Navigation 
 	Place your navigation bar here
								-->

    
    <!--Victim Rescue Form-->
    <div class="container">
    	<div>
        	<legend>Victim Reporting</legend>
        </div>
        <form class="form-horizontal" action="gmap_output.php" method="POST" id="myForm">
			<fieldset>
                        <div class="well col-md-12">
                        	<h4 style="color:#F00"><strong>Are you a victim? Report Your Situation now.</strong></h4>
                            <p style="color:#F00">Rescue teams & concerned authorities will be informed to reach to you as sooon as possible.</p><a class="pull-right" href="#">No, just take me to the site's regular home page.</a><br /><br />
							<legend></legend>
                            <div class="col-md-6">
                                <h4><strong>Your Condition</strong></h4>
                                <legend></legend>
                                        
                                <div class="control-group">
                            <label class="control-label" for="injury">Are you injured?</label>
                            <div class="controls">
                                <label class="radio-inline"><input type="radio" name="victim_injury" value="uninjured" class="input-xlarge" required>No, I am Fine. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="victim_injury" value="slightly_injured" class="input-xlarge" required>Yes, I am Slightly Injured. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="victim_injury" value="seriously_injured" class="input-xlarge" required>Yes, I am Seriously Injured. &nbsp;</label><br />
                            </div>
                        </div> <br />
                        
                        		<div class="control-group">
                            <label class="control-label" for="trap">Are you trapped?</label>
                            <div class="controls">
                                <label class="radio-inline"><input type="radio" name="trap" value="no" class="input-xlarge" required>No. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="trap" value="trapped_but_mobile" class="input-xlarge" required>Yes, I am trapped but I can move around. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="trap" value="trapped_and_immobile" class="input-xlarge" required>Yes, I am trapped & I cannot move. &nbsp;</label><br />
                            </div>
                        </div> <br />
                                
                                <div class="control-group">
							<label class="control-label" for="victim_condition">Please check mark if you are suffering from following complications. </label>
							<div class="controls">
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition1" value="suffocating" class="input-xlarge">Suffocation &nbsp;</label><br />
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition2" value="dehydrating" class="input-xlarge">Dehydration &nbsp;</label><br />
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition3" value="bleeding" class="input-xlarge">Bleeding &nbsp;</label><br />
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition4" value="unconscious" class="input-xlarge">Losing consciousness</label>
							</div>
						</div>  <br />
                        
                        		<div class="control-group">
									<label class="control-label" for="hazards">Please check mark if you are in any of the following hazarduous situation. </label>
									<div class="controls">
                            			<label class="checkbox-inline"><input type="checkbox" name="fire" value="fire" class="input-xlarge">Fire</label><br />
                            			<label class="checkbox-inline"><input type="checkbox" name="chemical" value="chemical" class="input-xlarge">Chemical</label><br />
                            			<label class="checkbox-inline"><input type="checkbox" name="debries" value="debries" class="input-xlarge">Falling Debries / Collapsing Buildings </label><br />
                                        <label class="checkbox-inline"><input type="checkbox" name="altitude" value="altitude" class="input-xlarge">Altitude</label><br />
									</div>
								</div>  <br />
                                 
                                <div class="control-group">
                            <label class="control-label" for="situation_descp">If you can, please describe your situation further.</label>
                            <div class="controls">
                                <textarea name="situation_descp" class="form-control" placeholder="Describe your situation here"></textarea>
                            </div>
                        </div> <br />
                                <!--<legend></legend>-->
                            </div>
                            
                            <div class="col-md-6">
                                <h4><strong>Your Information</strong></h4>
                                <legend></legend>
                                                                
                                <div class="control-group">
                            		<label class="control-label" for="victim_name">Your Name</label>
                            		<div class="controls">
                                		<input type="text" id="victim_name" name="victim_name" placeholder="Enter Your Name" class="form-control">
                            		</div>
                        		</div>  <br />
                                
                                <div class="control-group">
                            		<label class="control-label" for="phone">Phone / Mobile No.</label>
                            		<div class="controls">
                                		<input type="tel" id="phone" name="phone" placeholder="Enter Your Contact No." class="form-control">
                            		</div>
                        		</div>  <br />
                                
                                <div class="control-group">
                            <label class="control-label" for="loc_method">Provide your location:</label>
                            <div class="controls">
                                <label class="radio-inline"><input id="loc_method" type="radio" name="loc_method" value="form" class="input-xlarge" checked required>Use Form &nbsp;</label>
                                <label class="radio-inline"><input id="loc_method" type="radio" name="loc_method" value="map" class="input-xlarge" onClick="getLocation()" required>Use Map &nbsp;&nbsp;</label>
                                 <br />
                            </div>
                        </div> <br />
                        <div class="address-form">
                                
                                <div class="control-group">
                                    <label class="control-label" for="address">Address</label>
                                    <div class="controls">
                                    <div id="locationField">
                                        <input type="text" id="autocomplete" name="address" placeholder="Type your address here and google will auto suggest location for you." class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <br /><br />
                                <div class="control-group">
                                	<table class="table table-bordered table-hover">
                                <tr>
        <td><label class="control-label">Locality / Tole</label></td>

        <td><input class="form-control" id="street_number" name="tole" disabled="true"></input></td>
		</tr>
        <tr>
        <td><label class="control-label">Street</label></td>
        <td><input class="form-control" name="street" id="route" disabled="true"></input></td>
        </tr>
      </tr>
      <tr>
        <td><label class="control-label">City / VDC</label></td>
        <td><input class="form-control" id="locality" name="city_vdc" disabled="true"></input></td>
      </tr>
      <tr>
        <td><label class="control-label">Region</label></td>
        <td><input class="form-control" name="region" id="administrative_area_level_1" disabled="true"></input></td>
      </tr>
      <tr>
        <td><label class="control-label">Zip Code</label></td>
        <td><input class="form-control" id="postal_code" name="zip" disabled="true"></input></td>
      </tr>
      <tr>
        <td><label class="control-label">Country</label></td>
        <td><input class="form-control" name="country" id="country" disabled="true"></input></td>
      </tr>
                                
                                </table>
                                </div>
                                
						</div>
                        
                        <div class="control-group">
                        	<div class="map_info" id="map_info">
                            	<b>N.B:</b>
                                <ul ='color:#309'>
                                	<li>Use Form to submit your address if it takes too long to load the map.</li>
                                	<li>Please drag the marker to your current location if its not marking your current location.</li>
                                	<li>You can also drag the map around and pinch out to zoom in & pinch in to zoom out.</li>
								</ul>
                            </div>
                            
                        	<div style="color:#309" class="map-canvas" id="map-canvas"></div>
                            <div class = "infoPanel" id="infoPanel">
                            	
                                <div class="myLoc">
                                    <button class="btn btn-primary pull-left" onClick="getLocation()">Locate Me on the Map</button>
                                    <br /><br />
                                </div>
                                
    							<b>Current position:</b>
    							<div class="iP" id="info">
                                </div>
								<b>Closest matching address:</b>
    							<div class="iP" id="address">
                                </div>
                                <input type="hidden" name="lat" id="lat">
                                <input type="hidden" name="lon" id="lon">
                                <input type="hidden" name="user_alt" id="user_alt">
                                <input type="hidden" name="pos_acc" id="pos_acc">
                                <input type="hidden" name="alt_acc" id="alt_acc">
							</div>
                            
                        </div>
                                
                            </div>
                                                    
                            <!-- Button -->
                            <div class="control-group col-md-12">
                            	<br />
                                 <legend></legend>
                                <div class="controls">
                                    <button type="submit" name="submit" class="btn btn-success pull-right">Report My Situation</button>
                                    <br /><br />
                                </div>
                            </div>
                        </div>
                	</fieldset>
		</form>
	</div>
    
<!--JS for Address Mode Selection-->
<script type="text/javascript">
$("input:radio[name=loc_method]:first-child").click(function(){
	if($(this).val()=="form"){
		$(".address-form").css("display","block");
		$(".infoPanel").css("display","none");
		$(".map-canvas").css("display","none");
		$(".map_info").css("display","none");
		$(".myLoc").css("display","none");
		
	}else{
		$(".map_info").css("display","block");
		$(".map-canvas").css("display","block").css("position","relative").css("padding","2px").css("height","300px");
		$(".infoPanel").css("display","block");
		$(".address-form").css("display","none");
		$(".myLoc").css("display","block");
	}
})

</script>

<!--GMap API-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&libraries=places"></script>
    
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

var y = document.getElementById("map-canvas");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition,  showError,{
		enableHighAccuracy: true,
		timeout:750000
		});
    } else { 
        y.innerHTML = "Geolocation is not supported by this browser, choose <b>Use Form</b> option to fill the address form.";
    }
}

function showPosition(position) {
	var latLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
	if(position.coords.accuracy<2000){
		var zoomlevel=16;
	}
	else if(position.coords.accuracy<50000){
		var zoomlevel=13;
	}
	else if(position.coords.accuracy>100000){
		var zoomlevel=11;
	}
	else{
		var zoomlevel=12;
	}
	document.getElementById("pos_acc").value=position.coords.accuracy;
	if(position.coords.altitudeAccuracy!=0){
		document.getElementById("alt").value=position.coords.altitude;
		document.getElementById("alt_acc").value=position.coords.altitudeAccuracy;
	}
	var myOptions = {
		
	zoom: zoomlevel,
	center: latLng,
	mapTypeId: google.maps.MapTypeId.HYBRID
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),myOptions);

	var marker = new google.maps.Marker({
		position:latLng,
		map:map,
		title:'User Address Here',
		animation: google.maps.Animation.DROP,
		draggable:true
		
	});
	
	// Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
  // Add dragging event listeners.
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Dragging...');
  });
  
  google.maps.event.addListener(marker, 'drag', function() {
    //updateMarkerStatus('Dragging...');
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    //updateMarkerStatus('Drag ended');
    geocodePosition(marker.getPosition());
  });

	function geocodePosition(pos) {
		geocoder.geocode({
		latLng: pos
		}, function(responses) {
			if (responses && responses.length > 0) {
				updateMarkerAddress(responses[0].formatted_address);
			} else {
				updateMarkerAddress('Cannot determine address at this location.');
			}
		});
	}
	
	function updateMarkerStatus(str) {
		document.getElementById('markerStatus').innerHTML = str;
	}
	
	function updateMarkerPosition(latLng) {
		document.getElementById('info').innerHTML = [
    	latLng.lat(),
    	latLng.lng()
		].join(', ');
		document.getElementById("lat").value=latLng.lat();
		document.getElementById("lon").value=latLng.lng();
	}
	
	function updateMarkerAddress(str) {
		document.getElementById('address').innerHTML = str;
	}	
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            y.innerHTML = "User denied the request for Geolocation. If you are concerned with your privacy choose <b>Use Form</b> option to fill the address form."
            break;
        case error.POSITION_UNAVAILABLE:
            y.innerHTML = "Location information is unavailable. Choose <b>Use Form</b> option to fill the address form."
            break;
        case error.TIMEOUT:
            y.innerHTML = "The request to get user location timed out. Choose <b>Use Form</b> option to fill the address form."
            break;
        case error.UNKNOWN_ERROR:
            y.innerHTML = "An unknown error occurred. Choose <b>Use Form</b> option to fill the address form."
            break;
    }
}

</script>

<!--Google Places API-->
<script>
var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initialize() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
      { types: ['geocode'],
	  componentRestrictions: {country: 'np'}});
  // When the user selects an address from the dropdown,
  // populate the address fields in the form.
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    fillInAddress();
  });
}

// [START region_fillform]
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
// [END region_geolocation]

    </script>
    
    