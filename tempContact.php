<html>
<head>
	<title>Contact Us!</title>
</head>
<body>
	<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST"){

			$name = $_POST["name"];
			$email = $_POST["email"];
			$msg = $_POST["msg"];
			$phn = $_POST["phone"];

			if(!is_numeric($phn)){
				print 'Please review the phone number you entered. There seems to be a problem';
				exit;
			}

			$namePattern = '/^[a-z()\/\'":\*+|,.; \- !?&#$@]{2,75}$/i';
			if (!preg_match($namePattern, $name)){
				print 'Please review the name you entered. There seems to be a problem';
				exit;
			}

			foreach( $_POST as $value ){
 				if( stripos($value,'Content-Type:') !== FALSE ){
 					echo "There was a problem with the values you entered";
 					exit;
 				}
  			}

			require 'inc/PHPMailer/PHPMailerAutoload.php';

			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();
			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 2;
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			//Set the hostname of the mail server
			$mail->Host = "smtp.postmarkapp.com";
			//Set the SMTP port number - likely to be 25, 465 or 587
			$mail->Port = 25;
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			//Username to use for SMTP authentication
			$mail->Username = "4cb8eb51-0539-4248-b3d2-7b7741857ad0";
			//Password to use for SMTP authentication
			$mail->Password = "4cb8eb51-0539-4248-b3d2-7b7741857ad0";
			//Set who the message is to be sent from
			$mail->setFrom('jcbhatt@supplyzone.in', $name);
			//Set an alternative reply-to address
			$mail->addReplyTo($email,$name);
			//Set who the message is to be sent to
			$mail->addAddress('jcbhatt@supplyzone.in', "J. C. Bhatt");
			//Set the subject line
			$mail->Subject = "Enquiry from $name on SupplyZone.in";
			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML($msg);

			//send the message, check for errors
			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			    exit;
			} else {
				header("Location: contact.php?status=thanks");
				exit;
			}	

		}
	?>

	<h1>CONTACT</h1>

	<?php
		if(isset($_GET["status"]) AND $_GET["status"] == "thanks"){
		
		echo "Thanks";
		} else{
			?>
				<form method="POST" action="contact.php" style="margin:auto">
					<p>
						<label for="name">*Name:</label>
						<input type="text" name="name" id="name" placeholder="Ketan Bhatt" autocomplete="name" maxlength="30" required="true"><br>
					</p>
					<p>
						<label for="email">*Email:</label>
						<input type="email" name="email" id="email" placeholder="ktbt10@gmail.com" autocomplete="email" required="true">
						<label for="phone">Phone:</label>
						<input type="tel" name="phone" id="phone" placeholder="919899550412" maxlength="12" autocomplete="tel"><br>
					</p>
					<p>
						<label for="msg">*Message:</label>
						<textarea name="msg" cols=70% rows=10% id="msg" style="vertical-align:top"
							placeholder="Please enter your enquiry/comment/feedback" maxlength="300" required="true"></textarea>
					</p>
					<p style="display:none;">
						<label for="address">Address</label>
						--Humans please leave this field blank--
						<input type="text" name="address" id="address">
					</p>
					<input type="reset" value="Reset">
					<input type="submit" name="submit" value="Send">
				</form>

			<?php }	?>
</body>
</html>