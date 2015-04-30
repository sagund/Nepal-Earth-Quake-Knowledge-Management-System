<?php

if ($logged_in)
{
?>

<a href="/donation/add">Add a Donation</a>
<br><br>
<a href="/user/logout">Logout</a>
<?php
}
else
{
?>

<a href="/user/login">Login</a>

<?php
}



?>