<?php
namespace Model;

defined('ROOTPATH') OR exit('Access Denied!');


/**
* ContactForm class
**/

class ContactFormModel


{


	use Model;

	protected $table = 'contact';
	
        
        /*
	protected $allowedColumns = [
	
	'email',
	'password',
	
	];
        */

public function validate($data)
	
{
	$this->errors = [];
	
	if(empty($data['email']))
	
	{
		$this->errors['email'] = "Email is required";
		
	} else
	
	if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))
	
	{
		$this->errors['email'] = "Email is not valid";
		
	}
	
	if(empty($data['subject']))
	
	{
		$this->errors['subject'] = "Subject is required";
		
	}
	
	if(empty($data['name']))
	
	{
		$this->errors['name'] = "Name is required";
		
	}
	
	if(empty($data['name']))
	
	{
		$this->errors['message'] = "Message is required";
		
	}
	
	if (($data['number_1'] + $data['number_2']) != $data['numbers'])
	
	{
		$this->errors['sum'] = "Sum is wrong";
	}
	

	if(empty($this->errors))
	{
	
	return true;
	
	}

	return false;
	
}




public function send_data($data)
	
{

	if ($this->validate($data))

	{


	if (isset($data['task'], $data['email'], $data['name'], $data['subject'], $data['message']) && ($data['task'] == 'send_message') && (isset($_POST['numbers'])) && (isset($_POST['number_1'])) && (isset($_POST['number_2']))) 

	{
	if (($_POST['number_1'] + $_POST['number_2']) == $_POST['numbers'])
	
	{
	
	$your_email_address = $data['email'];
	$your_name = $data['name'];
	$entry_subject = $data['subject'];
	$entry_message = $data['message'];

        $filename_zip = "";
        $uploadOk = 0;

   
  
             $email = $your_email_address;
			 

 if (($email) && ($uploadOk == 0)) {
		
	 
		$reply_to = $email;

		
		//$to ='info@bogusiak.pl'; // nie działa z tego samego na ten sam
		$to = 'info@marte.best';
		
	
		
		
		///$to = $email;
		
		$now_time = date("Y-m-d H:i:s");
		
		
		
		
		$email_from = 'info@bogusiak.pl'; 
		$full_name = 'BOGUSIAK.PL';
		$from = $full_name.'<'.$email_from.'>';
		
		$reply_to = $your_name.'<'.$email.'>';
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		
		
		
		$headers .= "From: $from\r\nReply-to: $reply_to";
		
	
		
		
		$subject = "=?UTF-8?B?" . base64_encode("Wiadomość ze strony BOGUSIAK.PL") . "?=";
		
		
			
		$txt = '<html>
					<head>
					<title>Wiadomość ze strony BOGUSIAK.PL</title>
					</head>
					<body>';
        $txt .=  "<h3>";
		
	    
		
		
		$txt .= " Witaj !";
		
		
		
		
		
		$txt .=  "</h3>";
		$txt .=  '<hr>';
		
	
		
		$txt .=  "<p>";
		
		$txt .= 'Jestem '. $your_name . '. ';
		
		
		$txt .= ' Wysyłam tę wiadomość przez formularz kontaktowy na stronie. ';
		
		
		$txt .= ' <br>';
		
	 	if ($entry_subject != "")
			
		{
			$txt .= 'Temat: ' . $entry_subject . '<br> ';
			
		}
		
		
		if ($entry_message != "")
		{
		$txt .= 'Wiadomość: ' . $entry_message. '<br> ';
		}
		
		
		$txt .=  "</p>";
		$txt .=  "<p>";
		
		if ($filename_zip != "")
		{
		
		$link_to_zip = 'https://bogusiak.pl/upload/' . $string .'/'. $today.'-BOGUSIAK.PL-zalacznik.zip';
		$txt .= 'Link do pobrania załącznika ZIP: <a href="' . $link_to_zip. '"> Tutaj. </a> <br> ';
		}
		
		
		$txt .=  "</p>";
		
			$txt .=  "<p>";
		
		
		$txt .=  "</p>";
		
		
		$txt .=  "<hr>";
		$txt .=  "<p>";
		
		
		$txt .= ' Odwiedź BOGUSIAK.PL: <a href="https://www.bogusiak.pl"> TUTAJ </a>.';
		$txt .=  "</p>";

	

		
		$txt .= ' BOGUSIAK.PL, ' . "$now_time";
		$txt .=  "</p>";
		
		
		$txt .=  "<p>";
		
		$txt .=  '<img src="https://www.bogusiak.pl/public/assets/images/sybo.png" style="width:364px;height:45px;">';
	
		
		$txt .=  "</p>";

         $txt .="</body></html>";


			
		
		

		$body = $txt;
		
		
		
		$sent = mail($to,$subject,$body,$headers);

			}
			

		
		
	if (($sent) && ($uploadOk == 0)) 
	{ 

                
		   ?>
		   <div class="popup_window" style="width:750px, height:1000px;">


			<h2><?php echo gettext('Thank you.'); ?> <span class="modal_x" onclick="close_popup_window();">X</span></h2>
			
			<p><?php echo gettext('Message was sent.'); ?> </p>
			   
			</div>
		   
		   <?php
		   
	} 
	
		else 
		 
	{ 
		
	?>
		<div class="popup_window">

		<h2><?php echo gettext('Failure.'); ?><span class="modal_x" onclick="close_popup_window();">X</span></h2>
		
		<p><?php echo gettext('The message has not been sent.'); ?></p>
		<p><?php echo gettext('Please try again later.'); ?> </p>	
		</div>
		   
		<?php
		 
	}
	
            



	}

		
		
			else



	{

	?>

		<div class="popup_window">

			<h2><?php echo gettext('Failure.'); ?> <span class="modal_x" onclick="close_popup_window();">X</span></h2>
		
			<p><?php echo gettext('Wrong sum.'); ?></p>
			<p><?php echo gettext('Please try again later.'); ?></p>	
		</div>




	<?php




	}	
		
		
		
		
		
	}
		
	else



	{

	?>

		<div class="popup_window">

			<h2><?php echo gettext('Failure.'); ?> <span class="modal_x" onclick="close_popup_window();">X</span></h2>
		
			<p><?php echo gettext('Incomplete form.'); ?></p>
			<p><?php echo gettext('Please try again later.'); ?></p>	
		</div>




	<?php




	}	


	}

}

}

