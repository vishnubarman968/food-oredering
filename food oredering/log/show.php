<?php
include 'connection.php';
include'links.php';
$select="select *from login";
$query=mysqli_query($con,$select);
$row=mysqli_num_rows($query);
echo $row;
?>
<table border="10px" >
	    <tr>    <td>ID</td>
				<td>username</td>
				<td>email</td>
				<td>mobile</td>
				<td>password</td>
				<td>rpassword</td>
				<td>delete</td>
		</tr>		
			
	<?php
	for($i=1;$i<=$row;$i++)
	{
		$arrd=mysqli_fetch_array($query);
	?>
		<tr>
		<td><?php echo $arrd['id']?></td>
		<td><?php echo $arrd['username']?></td>	
		<td><?php echo $arrd['email']?></td>
		<td><?php echo $arrd['mobile']?></td>
		<td><?php echo $arrd['password']?></td>
		<td><?php echo $arrd['rpassword']?></td>
		<td><a href="delete.php?id=<?php echo $arrd['id']?>" data-toggle="tooltip" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
		</tr>
		<?php

	}?>
</table>

	 	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

