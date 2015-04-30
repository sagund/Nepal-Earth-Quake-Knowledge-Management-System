<?php

require_once(APPPATH.'views/nav.php');
?>
    <!-- Page Content -->
    <div class="container">
	
	<ul>
	
	<li><a href="<?php echo base_url().'volunteer';?>" >View Volunteers</a></li>
	<li><a href="<?php echo base_url().'volunteer/register';?>" >Become a Volunteer</a></li>
</ul>





<?php
	
	
	foreach($districts as $key=>$district){
		
		echo '<div>
			<ol>'.($key+1).'. '.$district['name'].'</ol>
		
		</div>';
		
		echo '<br/>';
	}

?>
</div>
