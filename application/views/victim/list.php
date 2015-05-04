<?php

require_once(APPPATH.'views/nav.php');
?>
    <!-- Page Content -->
    <div class="container">
	
	

	<h3>Victims by District and VDCs/ Muncipalities</h3>



<?php
	
	
	foreach($districts as $key=>$district){
		
		echo '<div><h3>'.($key+1).'. '.$district['name'].'</h3>';
		echo '<ol>';
		foreach($district['district_units'] as $k=>$unit){
			echo '<li> '.$unit['name'].'</li>';
		}
		echo '</ol>';
		echo '</div>';
		
		echo '<br/>';
	}

?>
</div>
