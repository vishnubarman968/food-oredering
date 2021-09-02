<?php
require 'PHPMailerAutoload.php';
$results='';
if(isset($_POST['submit'])){


$mail = new PHPMailer;

$mail->SMTPDebug = 4;                              

$mail->isSMTP();                                   
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;           
$mail->Username = 'vishnubarman005@gmail.com';           
$mail->Password = 'Vis123456@upscass1';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                                    

$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('vishnubarman00005@gmail.com');     

$mail->addReplyTo($_POST['email']);
$mail->isHTML(true);                                  

$mail->Subject = 'leaninh php mailer';
$mail->Body    = '<h1>fuckihnf awsm</h1>';

if(!$mail->send()) 
    $results='Something went wrong';
 
else 
    $results= 'Message has been sent';

}
?>
<html>
	<head><title>php malier</title></head>
	<style>
		.mailer
		{
			position: absolute;
			top:50%;
			left:50%;
		}
		input:focus{
			border :2px solid dodgerblue;
		}
	</style>
<body><div class="mailer">
	<form method="POST">
		<h1><?php echo $results ?></h1>
		<input type="text" name="name" placeholder="enter ur name">
		<input type="text" name="email" placeholder="enter email">
		<button name="submit">send</button>
		
	</form>
	
</div>
</body>
</html>
