<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<?php include 'connection.php';
	include 'links.php';
	?>
<style>
	.in{
		width:100%;
	}
	form{
		align-items:center;
		text-align:center;
	}
	button
	{
		margin:10px;
		background-color: #008CBA;
		font-size:1.2rem;
		outline:none;
		width:80%;
	}
	form
	{
		background:#3b5998;

	}
	img
	{
		margin-top:10px;
		border-radius:50px;
	}
	.input-field
	{
		font-size:1.2rem;
		outline:none;
		font-size:15px;

	}
input:focus
{
	border:2px solid dodgerblue;
}
    i
	{
		padding:6px;
		background:dodgerblue;
		color: #fff;
		min-width:20%;
		text-align:center;
	}
	.center
	{
		position: absolute;
		top:50%;
		transform:translate(-50%,-50%);
		left:50%;
		align-items: center;
		align-content: center;
		
	}
	.fb
	{
		text-decoration: underline;
		background-color:#3b5998 ;
	}
	input
	{
margin-bottom:10px;
margin-top:15px;
		padding-right:0px;
	outline:none;
	cursor:pointer;
	}
.g
{
	text-decoration: underline;
	background-color:#B23121;
}
</style>
</head>
<body>
<div class=main>
	<div class="center">
		<h1> Create Account</h1><hr>
		<a class="fb">login via facebook</a>&nbsp
		<a class="g">login via google</a><br><br>
		<form method="POST">
			<img src="user.jpg" width="100px" height="100px"><br>
			<div class="in"><i class="fa fa-user icon" aria-hidden="true"></i><input class="input-field" type="text" name="fn" placeholder="username" required><br>
		<i class="fa fa-envelope-o" aria-hidden="true"></i><input type="text" name="email"placeholder="email"required><br>
		<i class="fa fa-phone-square" aria-hidden="true"></i><input type="text" name="number" placeholder="number"required><br>
		<i class="fa fa-key" aria-hidden="true"></i><input type="text" name="cpass" placeholder="password"required><br>
		<i class="fa fa-key" aria-hidden="true"></i><input type="text" name="rpass"placeholder="retypepassword"required><br></div>
				<button name="submit">create account</button>

		<br>

			have an account?<a href ="login.php">log in</a></form>
			<a href="show.php">show</a> 
			</div></div>
</body>
</html>		
<?php
if(isset($_POST['submit']))
{
$select="select * from login";
$query=mysqli_query($con,$select);
$arr=mysqli_fetch_assoc($query);
if($arr['email']==$_POST['email'])

		{echo "email is alreday entered";}
	
		
	else
		{
				$username=$_POST['fn'];
				$email=$_POST['email'];
				$number=$_POST['number'];
				$cpass=$_POST['cpass'];
				$rpass=$_POST['rpass'];
				
				$insert="insert into login(username,email,mobile,password,rpassword) value('$username','$email','$number','$cpass','$rpass')";
		$res=mysqli_query($con,$insert);
		if($res)
		{?>
			 <script>
			 alert("database successful");
			 </script>
		<?php	
		}
		else
		{
			?>
			<script>
			 alert("not successful");
			 </script>
			<?php
        }
        }}
?>