
<div class="container">
    <!-- Page Content -->
	<div class="row">
	    <div class="col-lg-12">
	        <h2 class="page-header">Victims by District</h2>
	   
	
<?php
	
	
	foreach($districts as $key=>$district){
		
		echo '<h4>'.($key+1).'. '.$district['name'].'</h4>';
		echo '<ol>';
		foreach($district['district_units'] as $k=>$unit){
			echo '<li> '.$unit['name'].'</li>';
		}
		echo '</ol>';
		//echo '</div>';
		
		//echo '<br/>';
	}

?>
		</div>
	</div>
</div>
