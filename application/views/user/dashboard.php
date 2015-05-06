<div class="container">
<?php
if ($logged_in){ ?>
	 <div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><?php echo 'Welcome '.$username.' ['.$user_type.']'; ?></h1>
        </div>
    </div>

	<?php
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
</div>