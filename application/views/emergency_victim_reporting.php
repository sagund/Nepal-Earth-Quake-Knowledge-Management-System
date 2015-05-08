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
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    
    <script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

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
      { types: ['geocode'] });
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
    
    <style>
      #locationField, #controls {
        position: relative;
        /*width: 480px;*/
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
    </style>
    <!--End of assets for GMap-->
    
    <!-- jQuery -->
    <script src="../../assets/js/jquery-1.11.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <!--<script src="../../assets/js/custom.js"></script>-->

</head>


<body  onload="initialize()">

 <!-- Navigation 
 	Place your navigation bar here
								-->

    
    <!--Victim Personal Situation Reporting Body-->
    <div class="container">
    	<div>
        	<legend>Victim Reporting</legend>
        </div>
        <form class="form-horizontal" action="" method="POST">
                	<fieldset>
                        <div class="well col-md-12">
                        	<h3><strong>Report Your Situation</strong></h4>
							<legend></legend>
                            <div class="col-md-6">
                                <h4><strong>Your Condition</strong></h4>
                                <legend></legend>
                                
                                <div class="control-group">
                            		<label class="control-label" for="victim_name">Your Name</label>
                            		<div class="controls">
                                		<input type="text" id="victim_name" name="victim_name" placeholder="Enter Your Name" class="form-control">
                            		</div>
                        		</div>
        
                                <div class="control-group">
                            <label class="control-label" for="injury">Are you injured?</label>
                            <div class="controls">
                                <label class="radio-inline"><input type="radio" name="victim_injury" value="uninjured" class="input-xlarge" required>No, I am Fine. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="victim_injury" value="slightly_injured" class="input-xlarge" required>Yes, I am Slightly Injured. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="victim_injury" value="seriously_injured" class="input-xlarge" required>Yes, I am Seriously Injured. &nbsp;</label><br />
                            </div>
                        </div>
                        
                        		<div class="control-group">
                            <label class="control-label" for="trap">Are you trapped?</label>
                            <div class="controls">
                                <label class="radio-inline"><input type="radio" name="trap" value="no" class="input-xlarge" required>No. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="trap" value="trap_but_mobile" class="input-xlarge" required>Yes, I am trapped but I can move around. &nbsp;</label><br />
                                <label class="radio-inline"><input type="radio" name="trap" value="seriously_injured" class="input-xlarge" required>Yes, I am trapped & I cannot move. &nbsp;</label><br />
                            </div>
                        </div>
                                
                                <div class="control-group">
							<label class="control-label" for="victim_vondition">Please check mark if you are suffering following complications. </label>
							<div class="controls">
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition" value="suffocating" class="input-xlarge">Suffocation &nbsp;</label>
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition" value="dehydrating" class="input-xlarge">Dehydration &nbsp;</label>
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition" value="bleeding" class="input-xlarge">Bleeding &nbsp;</label>
                            <label class="checkbox-inline"><input type="checkbox" name="victim_condition" value="unconscious" class="input-xlarge">Losing my consciousness</label>
							</div>
						</div>
                        
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
                            		<label class="control-label" for="phone">Phone / Mobile No.</label>
                            		<div class="controls">
                                		<input type="tel" id="phone" name="phone" placeholder="Enter Your Contact No." class="form-control">
                            		</div>
                        		</div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="address">Address</label>
                                    <div class="controls">
                                    <div id="locationField">
                                        <input type="text" id="autocomplete" name="address" placeholder="Enter your address" class="form-control" required>
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
        <td><label class="control-label">Zip code</label></td>
        <td><input class="form-control" id="postal_code" name="zip" disabled=""></input></td>
      </tr>
      <tr>
        <td><label class="control-label">Country</label></td>
        <td><input class="form-control" name="country" id="country" disabled="true"></input></td>
      </tr>
                                
                                </table>
                                </div>
                            </div>
                                                    
                            <!-- Button -->
                            <div class="control-group col-md-12">
                                <br /> <legend></legend>
                                <div class="controls">
                                    <button type="submit" name="submit" class="btn btn-success pull-right">Report My Situation</button>
                                    <br /><br /><p align="right"><a href="#">Go to site's regular home page</a></p>
                                </div>
                            </div>
                        </div>
                	</fieldset>
            	</form>
	</div>