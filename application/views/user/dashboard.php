<?php

if ($logged_in)
{
?>

<a href="<?php echo base_url(); ?>donation/add">Add a Donation</a>
<br><br>
<a href="<?php echo base_url(); ?>user/logout">Logout</a>
<?php
}
else
{
?>

<a href="<?php echo base_url(); ?>user/login">Login</a>

<?php
}



?>