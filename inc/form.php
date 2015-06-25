<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST"){

			$name = $_POST["name"];
			$email = $_POST["email"];
			$msg = $_POST["msg"];
			$phn = $_POST["phone"];

			if(!is_numeric($phn)){
				header("Location:../response.php?status=sorry");
				exit;
			}

			$namePattern = '/^[a-z()\/\'":\*+|,.; \- !?&#$@]{2,75}$/i';
			if (!preg_match($namePattern, $name)){
				header("Location:../response.php?status=sorry");
				exit;
			}

			foreach( $_POST as $value ){
 				if( stripos($value,'Content-Type:') !== FALSE ){
 					header("Location:../response.php?status=sorry");
					exit;
 				}
  			}

			require 'PHPMailer/PHPMailerAutoload.php';

			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			//Tell PHPMailer to use SMTP
			$mail->Port = $SmtpPort;
			$mail->isSMTP();
			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 0;
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			//Set the hostname of the mail server
			$mail->Host = "localhost";
			//Set the SMTP port number - likely to be 25, 465 or 587
			$mail->Port = 25;
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			//Username to use for SMTP authentication
			$mail->Username = "jcbhatt@supplyzone.in";
			//Password to use for SMTP authentication
			$mail->Password = "Toshiba@2014";
			
			//Set who the message is to be sent from
			$mail->setFrom($email, $name);
			//Set an alternative reply-to address
			$mail->addReplyTo($email,$name);
			//Set who the message is to be sent to
			$mail->addAddress('jcbhatt@supplyzone.in', "J. C. Bhatt");
			//Set the subject line
			$mail->Subject = "Enquiry from $name on Supplyzone.in";
			//Read an HTML message body from an external file, convert referenced images to embedded,
			$body = "$name submitted the form on Supplyzone.in <br><br><br>Message: <q>".$msg."</q><br><br>Reply to his Email on $email.
						<br><br>Or contact him on $phn.<br><br><br>Thanks";
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML($body);
		
			//send the message, check for errors
			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			    exit;
			} else {
				header("Location:../response.php?status=thanks");
				exit;
			}	

		/*	header("Location:../response.php?status=thanks");
			exit;
*/
		}
?>
		
			<form method="POST" action="./inc/form.php">	
				<div class = "contact">
					<div class = "container">
						<h2> Get in Touch Now </h2>
						<div class="contact-col-1">
							<input type = "text" name = "name" id="name" placeholder = "Full Name*" autocomplete="name" maxlength="30" required="true"/> 
							<input type = "email" name = "email" id="email" placeholder = "Email ID*" autocomplete="email" required="true"/> 
							<input type = "tel" name = "phone" id="phone" placeholder = "Phone No." maxlength="12" autocomplete="tel"/> 
						</div>
						<div class="contact-col-2">
							<textarea name ="msg" id="msg" rows="4" cols="50" placeholder="Message here..." maxlength="300" required="true"></textarea>
						</div>
						<p style="display:none;">
							<label for="address">Address</label>
							--Humans please leave this field blank--
							<input type="text" name="address" id="address">
						</p>
						<div style="clear:both;"></div>
						<input type="submit" name="submit" value="Submit">
					</div>
				</div>	
			</form>
	