<?php
 //Run MySQL query to get all info of all rescue calls from db
 //$sql=mysql_query("SELECT * FROM rescue_calls");
?>

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
		#map_canvas {
			position: relative;
			padding: 2px;
			height: 480px;
		}
    </style>
    <!--End of assets for GMap-->
    
    <!-- jQuery -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/js/bootstrap.min.js"></script>

</head>

<body onLoad="initialize()">

 <!-- Navigation 
 	Place your navigation bar here
								-->

    
    <!--Container for GMap & Table-->
    <div class="container">
    	<div>
        	<legend>Rescue Calls</legend>
        </div>
        <form class="form-horizontal" action="gmap_output.php" method="POST" id="myForm">
                        <div class="well col-md-12">
                        	<h4><strong>Victim Rescue Calls.</strong></h4>
							<legend></legend>
                        
                        <div class="control-group">                        	
                            
                        	<div style="color:#309" class="map_canvas" id="map_canvas"></div><br>
                            <legend></legend> 
                            <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Injury</th>
                                            <th class="text-center">Trap</th>
                                            <th class="text-center">Complications</th>
                                            <th class="text-center">Hazards</th>
                                            <th class="text-center">Rescue Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									$i=1;
									while($row=mysql_fetch_array($sql)){
									?>
                                    	<tr>
                                        	<td><?php echo $i; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['address']."<br>Lat: ".$row['lat']." deg. N<br>Lon: ".$row['lon']." deg. E<br>Position Accuracy: ".$row['pos_acc']."m"; ?></td>
                                            <td><?php echo $row['injury']; ?></td>
                                            <td><?php echo $row['trap']; ?></td>
                                            <td><?php echo $row['complications']; ?></td>
                                            <td><?php echo $row['hazards']; ?></td>
                                            <td><?php echo $row['rescue_status']; ?></td>
                                       </tr>
                                    <?php
									$i++;
									}
									?>
                                    </tbody>
                                </table>                        
    							
						</div>
                            
                        </div>
                                
                       </form>
	</div>
    

<!--GMap API-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&libraries=places"></script>
    
<script type="text/javascript">
  function initialize() {
    var center = new google.maps.LatLng(27.657416, 85.318379);

    var map = new google.maps.Map(document.getElementById('map_canvas'), {
      zoom: 12,
      center: center,
      mapTypeId: google.maps.MapTypeId.HYBRID
    });
	var i=0;
	
	<?php
	//Run MYSQL query to get all info of all victims from DB
	//$sql=mysql_query("SELECT * FROM rescue_calls");
	while($row=mysql_fetch_array($sql)){	
	?>
	  var lat = "<?php echo $row["lat"] ?>";
	  var lon = "<?php echo $row["lon"] ?>";
	  
	  var address = <?php echo json_encode($row['address']) ?>;
	  
                    // init markers
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, lon),
                        map: map,
                        title: address
						
                    });

                    // process multiple info windows
                    (function(marker, i) {
                        // add click event
						var name = <?php echo json_encode($row['name']) ?>;
						var phone = <?php echo json_encode($row['phone']) ?>;
						var pos_acc = <?php echo json_encode($row['pos_acc']) ?>;
						var rescue_status = <?php echo json_encode($row['rescue_status']) ?>;
                        google.maps.event.addListener(marker, 'click', function() {
                            infowindow = new google.maps.InfoWindow({
                                content: name + "<br>" + address + "<br>" +
								lat + " deg.N " + lon + " deg.E" + "<br>Location Accuracy: " + pos_acc + "m" + "<br>" + rescue_status
                            });
                            infowindow.open(map, marker);
                        });
                    })(marker, i);
					i++;
    <?php
	}
	?>
   
  }
</script>    