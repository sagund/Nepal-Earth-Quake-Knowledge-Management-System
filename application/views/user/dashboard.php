<?php

if ($logged_in){
	
	echo 'role'.$user_type;

	echo '<ul>';


	
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
	
	
	
<?php
}else{
?>

<a href="/user/login">Login</a>

<?php
}
?>
