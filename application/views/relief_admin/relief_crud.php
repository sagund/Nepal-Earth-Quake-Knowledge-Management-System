


<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>

	<div>
		<a href='<?php echo site_url('admin/crud/user')?>'>User Admin</a> |
		<a href='<?php echo site_url('admin/crud/donation')?>'>Donation Admin</a> |
		<a href='<?php echo site_url('admin/crud/village')?>'>Village Admin</a> |
		<a href='<?php echo site_url('admin/crud/donation_distribution')?>'>Donation_Distribution Admin</a> |
		<a href='<?php echo site_url('admin/crud/victim')?>'>Victim Admin</a> |
		<a href='<?php echo site_url('admin/crud/victim_family')?>'>Victim Family Admin</a> |
		<a href='<?php echo site_url('admin/crud/districts')?>'>District Admin</a> |
		<a href='<?php echo site_url('admin/crud/district_units')?>'>DistrictUnits Admin</a> |
		<a href='<?php echo site_url('admin/crud/wards')?>'>Wards Admin</a> |
		<a href='<?php echo site_url('admin/crud/newspapers')?>'>News Papers</a> |
		<a href='<?php echo site_url('admin/pages')?>'>Static Pages</a> |
		<a href='<?php echo site_url('/admin/logout')?>'>Logout</a> |
	</div>
	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>
