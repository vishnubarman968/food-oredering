
<html>
<head></head>
<body>
<a href="show.php"></a>
</body>
</html>

<?php
include'connection.php';
include 'links.php';
$ids=$_GET['id'];
$query="delete from login where id=$ids";
$delete=mysqli_query($con,$query);
if($delete)
{
	echo "<font color='green'>REcord deleted";

}
else
{
	echo "<font color='red'>dailed";
}
?>
