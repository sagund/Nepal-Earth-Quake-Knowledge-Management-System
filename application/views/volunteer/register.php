<?php require_once(APPPATH.'views/nav.php');?>
    <!-- Page Content -->
    <div class="container">
		
		<h3>Register me as a volunteer:</h3>
<form action="<?php echo base_url();?>volunteer/create" method="post" >
	<input type="text" name="name" />
	
	
	<input type="text" name="mobile" />
	<select name="district">
		<option>District</option>
		<?php
	
	
		foreach($districts as $key=>$district){
			echo '<option value="'.$district['id'].'">'.$district['name'].'</option>';
		}

	?>
	</select>
	Where?
	<select name="vdc">
		<option>VDC / Muncipality</option>
	</select>
	Area of Expertise:
	<input type="text" name="area"/>
	What I can do:
	<select>
		<option>Rescue</option>
		<option>Medical Help</option>
		<option>Sanitation &amp; Cleaning</option>
		<option>Sanitation Awareness</option>
		<option>Disease Awareness</option>
		<option>Habitation</option>
	</select>
	<input type="submit" name="submit" value="register me!"/>


</form>
</div>
