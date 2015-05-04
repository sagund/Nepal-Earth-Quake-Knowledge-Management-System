<?php

if ($logged_in){
	
	echo 'Welcome '.$username.' ['.$user_type.']';
	echo '<ul>';
	
	if($user_type == "volunteer"){
		echo '<li><a href="'.base_url().'/victim">Report a Victim</a></li>';
		echo '<li><a href="'.base_url().'/media/add">Add Media</a></li>';	
	}
	
	if($user_type == "admin" ){
		echo '<li><a href="'.base_url().'/victim">Report a Victim</a></li>';
		echo '<li><a href="'.base_url().'/media/add">Add Media</a></li>';	
		echo '<li><a href="'.base_url().'/donation/add">Add a Donation</a></li>';	
		echo '<li><a href="'.base_url().'/donation/add">Report a Situation!</a></li>';
	}
	if($user_type == "donor" ){
		echo '<li><a href="'.base_url().'/donation/add">Add a Donation</a></li>';	
	}
	if($user_type == "editor" ){
		echo '<li><a href="'.base_url().'/media/add">Add Media</a></li>';	
	}
	if($user_type == "representative" ){
		echo '<li><a href="'.base_url().'/donation/add">Report a Situation!</a></li>';	
	}
?>
	<li><a href="<?php echo base_url(); ?>user/logout">Logout</a></li>
	<li></li>
	
	
	</ul>
	
<?php
}else{
?>

<a href="<?php echo base_url(); ?>user/login">Login</a>

<?php
}
?>
