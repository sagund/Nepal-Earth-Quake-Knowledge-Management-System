<?php

if ($logged_in){
	
	echo 'role'.$user_type;

	echo '<ul>';


<<<<<<< HEAD
	
	if($user_type == "volunteer"){
		echo '<li><a href="'.base_url().'/victim">Report a Victim</a></li>';
	}
	
	if($user_type == "donor" ){
		echo '<li><a href="'.base_url().'/donation/add">Add a Donation</a></li>';	
	}
?>
	<li><a href="/user/logout">Logout</a></li>
	<li></li>
	
	
	</ul>
	
	
	
=======
<a href="<?php echo base_url(); ?>donation/add">Add a Donation</a>
<br><br>
<a href="<?php echo base_url(); ?>user/logout">Logout</a>
>>>>>>> a5356fd6d7d69612f6816eb705361a2665c858c5
<?php
}else{
?>

<a href="<?php echo base_url(); ?>user/login">Login</a>

<?php
}
?>
