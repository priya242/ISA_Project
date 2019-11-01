<?php
if ( ( isset( $_POST['name'] ) && $_POST['name'] != "" ) && ( isset( $_POST['phone'] ) && $_POST['phone'] != "" ) && ( isset( $_POST['email'] ) && $_POST['email'] != "" ) ) {
	$to      = 'example@domain.com';
	$subject = 'Contact form';
	$message = '
			                <html>
			      			              <head>
			                        <title>' . $subject . '</title>
			                    </head>
			                    <body>
			                        <p>Name: ' . $_POST['name'] . '</p>
			                        <p>Phone: ' . $_POST['phone'] . '</p>                        
			                        <p>Email: ' . $_POST['phone'] . '</p>                        
			                        <p>Message: ' . $_POST['message'] . '</p>                        
			                    </body>
			                </html>';
	$headers = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: <example@domain.com>\r\n";
	mail( $to, $subject, $message, $headers );
}











