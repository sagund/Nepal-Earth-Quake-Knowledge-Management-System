


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
				<a href='<?php echo site_url('admin/crud/need_relief')?>'>Relief Needers Admin</a> |
				<a href='<?php echo site_url('admin/crud/districts')?>'>District Admin</a> |
<a href='<?php echo site_url('admin/crud/district_units')?>'>DistrictUnits Admin</a> |
<a href='<?php echo site_url('admin/crud/wards')?>'>Wards Admin</a>
	</div>
	<div style='height:20px;'></div>
    <div>
		<?php echo $output; ?>
    </div>
