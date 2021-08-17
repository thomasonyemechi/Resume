<?php 

/**
 * 
 */
class Profile 
{
	
	function __construct()
	{

		if(array_key_exists('sendMail', $_POST)){
			$this->sendMail();
		}
	}


	function sendMail()
	{    
		global $report, $count;
        $headers = 'From: LIVEPETAL <support@https://biggerresume.herokuapp.com>' . "\r\n";
        $headers .= 'Reply-To: https://biggerresume.herokuapp.com' . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $subject ='Contact Mail';
        $email = $_POST['email'];
        $mailmessage = $_POST['message']. ' email: '. $email;
        $send = mail(PROJECT_EMAIL, $subject, $mailmessage, $headers);

        $report = 'Message Successfully sent';

        return;
	}
}

$cla = new Profile;