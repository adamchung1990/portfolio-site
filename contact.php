<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    $from = 'From: GMW Form Test'; 
    $to = 'adamchung1990@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
	    if ($name != '' && $email != '') {		 
	            if (mail ($to, $subject, $body, $from)) { 
		        echo '<p>Your message has been sent!</p>';
				} 
	    } else {
	        echo '<p>You need to fill in all required fields!!</p>';
	    }
	}
?>