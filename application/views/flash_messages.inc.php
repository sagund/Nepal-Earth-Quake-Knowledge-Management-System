<?PHP
if (SESSION::exists('flash_msg'))
{
	if (!SESSION::exists('flash_msg_type'))
	{
		$flash_class = "info";
	}
	else
	{
		$flash_class = SESSION::get('flash_msg_type');
	}
?>
<div class="alert alert-<?php echo $flash_class; ?> fade in" role="alert" >
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
<?php echo SESSION::get('flash_msg'); ?>
</div>
<?php
SESSION::delete('flash_msg');
SESSION::delete('flash_msg_type');
}
?>