<form action="" method="POST" >
	
	<select name="district" class="form-control" required>
	<option value="">Select District</option>
	<?php


	foreach($districts as $key=>$district){
	echo '<option value="'.$district['id'].'">'.$district['name'].'</option>';
	}

	?>
	</select>
	Status
	<select name="status">
	<option value="dead">Dead</option>
	<option value="missing">Missing</option>
	<option value="injured">Injured</option>
	<option value="homeless">Homeless</option>
	<option value="lack of food">Lack of Food</option>
	<option value="need medical support">Need medical support</option>
	</select>
	<br/>
	Status
	<select name="status">
	<option value="dead">Dead</option>
	<option value="missing">Missing</option>
	<option value="injured">Injured</option>
	<option value="homeless">Homeless</option>
	<option value="lack of food">Lack of Food</option>
	<option value="need medical support">Need medical support</option>
	</select>
	<br/>
	Type:
	
	<select name="type">
	
	<option value="civilian">Civilian</option>
	<option value="army">Army</option>
	<option value="police">Police</option>
	<option value="armed-police">Armed Police</option>
	<option value="civil-servants">Civil Servants</option>
	<option value="foreigners">Foreigners</option>
	<option value="all">All</option>
	</select>
	<br/>
	<input type="text" name="count" value="0" />
	<br/>
	<input type="sibmit" name="report" value="Report" />
	
</form>
